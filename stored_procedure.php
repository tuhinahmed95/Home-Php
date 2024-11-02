<?php 
$db = new mysqli('localhost','root','','company');

if(isset($_POST['btnSubmit'])){
	$mname = $_POST['mname'];
    $address = $_POST['address'];
	$contact = $_POST['contact'];
	$db->query(" call pro_manufacturer('$mname','$address',$contact') ");
}


if(isset($_POST['addProduct'])){
	$pname = $_POST['pname'];
	$price = $_POST['price'];
    $manu = $_POST['manu'];
	$mid = $_POST['manufac'];
	$db->query(" call pro_product('$pname','$price','$manu',$mid') ");
}


if(isset($_POST['delmanufact'])){
	$mid = $_POST['manufac'];
	$db->query(" delete from manufacturer where id='$mid ' ");
}


?>

<h3>Manufacturer table</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="mname">Name</label></td>
			<td><input type="text" name="mname" /></td>
		</tr>

		<tr>
			<td><label for="address">Address</label></td>
			<td><input type="text" name="address" /></td>
		</tr>

        <tr>
			<td><label for="contact">Contact</label></td>
			<td><input type="text" name="contact" /></td>
		</tr>

		<tr> 
			<td></td>
			<td><input type="submit" name="btnSubmit" value="submit" /></td>
		</tr>

	</table>
</form>

<h3>Product table</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="pname">Name</label></td>
			<td><input type="text" name="pname" /></td>
		</tr>

		<tr>
			<td><label for="price">Price</label></td>
			<td><input type="text" name="price" /></td>
		</tr>

        <tr>
			<td><label for="manu">Manufacture Id</label></td>
			<td><input type="text" name="manu" /></td>
		</tr>

		<tr>
			<td><label for="manufac">Manufacturer Name</label></td>
			<td>
				<select name="manufac">
					<?php 
						$manufac = $db->query("select * from manufacturer");
						while(list($_mid,$_mname) = $manufac->fetch_row()){
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="addProduct" value="submit" /></td>
		</tr>
	</table>
</form>


<form action="#" method="post">
	<table>
		<tr>
			<td><label for="manufac">Manufacturer</label></td>
			<td>
				<select name="manufac">
					<?php 
						$manufac = $db->query("select * from manufacturer");
						while(list($_mid,$_mname) = $manufac->fetch_row()){
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="delmanufact" value="delete" /></td>
		</tr>
	</table>
</form>



<h3>View Product</h3>

<table border="1" style="border-collapse: collapse;" > 
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact</th>
		<th>P Name</th>
		<th>Price</th>
		<th>Manufacture Id</th>
	</tr>
	<?php 
		$product = $db->query(" select * from vie_product ");
		while(list($id,$name,$address,$contact,$p_name,$price,$manufacture) = $product->fetch_row()){
			echo "<tr> 
					<td>$id</td>
					<td>$name</td>
					<td>$address</td>
					<td>$contact</td>
					<td>$p_name</td>
					<td>$price</td>
					<td>$manufacture</td>
				</tr>";
		}
	
	?>
</table>