<?php
require_once("connect.php");

$result = mysqli_query($conn, "SELECT * from student_details order by Roll desc");

?>
//this is connect page
<html> 
    <head> 
        <title>Home Page</title>
    </head>
    <body>
        <h1>Student Details</h1>
        <table width='800px'>
            <tr> 
                <td><strong>Roll</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Gender</strong></td>
                <td><strong>Age</strong></td>
                <td><strong>GPA</strong></td>
                <td><strong>City</strong></td>
            </tr> 

            <?php

            while($show = mysqli_fetch_assoc($result)){ 
               echo "<tr>";
               echo "<td>".$show['Roll']."</td>"; 
               echo "<td>".$show['Name']."</td>"; 
               echo "<td>".$show['Gender']."</td>"; 
               echo "<td>".$show['Age']."</td>"; 
               echo "<td>".$show['GPA']."</td>"; 
               echo "<td>".$show['City']."</td>"; 
               
               
               
               echo "</tr>";
            }



            ?>

        </table>
    </body>
</html>