<?php
// Include the database connection file
require_once("dbconnect.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM student_details ORDER BY id DESC");
// or
// $user = $mysqli->query("select * from user");

?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2>Student Details</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' border=0>
    <table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Roll</strong></td>
			<td><strong>Name</strong></td>
			<td><strong>Gender</strong></td>
			<td><strong>Age</strong></td>
			<td><strong>GPA</strong></td>
			<td><strong>City</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['email']."</td>";	
				echo "<td><a>Edit</a> | 
				<a>Delete</a></td>";
				echo "</tr>";
		}
		?>

	
	</table>
</body>
</html>