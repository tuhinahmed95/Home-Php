<?php 
if(isset($_POST['fileUp'])){
	$tmp_name = $_FILES['ufile']['tmp_name'];
	$name = $_FILES['ufile']['name'];
	$size = $_FILES['ufile']['size'];
	
	$kb = $size/1024;
	
	if(empty($tmp_name)){
		echo "Please select a file";
	}elseif($kb>250){
		echo "File is to learge";
	}else{
		$upload = move_uploaded_file($tmp_name,"upload/".$name);
	}
}
?>
<form action="#" method="post" enctype="multipart/form-data">
	<input type="file" name="ufile"/>
	<input type="submit" name="fileUp" value="Upload" />
</form>
<?php 

// display the uploaded image
if(isset($upload)){
	echo "<h2>File uploaded successfully</h2>";
	echo "<img src='upload/$name' width='300' alt='' />";
}


?>