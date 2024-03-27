<?php

$conn = new mysqli ("localhost","root","","Company");

if(isset($_POST['btn'])){ 
    $f_name =  $_POST['fname'];
    $a_address = $_POST['address'];
    $c_contact = $_POST['contact'];

    $conn->query("call pro_manufacture('$f_name','a_address','c_contact')");
}

?>




<form action="#" method="post"> 
    <tr> 
        <td><label for="fname">Name</label></td><br>
        <td><input type="text" name="fname"></td><br>
    </tr>

    <tr> 
        <td><label for="address">Address</label></td><br>
        <td><input type="text" name="address"></td><br>
    </tr

    <tr> 
        <td><label for="contact">Contact No</label></td><br>
        <td><input type="text" name="contact"></td><br>
    </tr

    <tr> 
        
        <td><input type="submit" name="btn" value="submit"></td>
    </tr


    
</form>
<br><br><br>

<?php

if(isset($_POST['btnsub'])){ 
    $name = $_POST['name'];
    $price = $_POST['price'];
    $menu = $_POST['manu'];

    $conn->query("call pro_product('$name','$price','$menu')");
}

?>

<form action="#" method="post"> 
    <tr> 
        <td><label for="name">Name</label></td><br>
        <td><input type="text" name="name"></td><br>
    </tr>

    <tr> 
        <td><label for="price">Price</label></td><br>
        <td><input type="text" name="price"></td><br>
    </tr>

    <tr> 
        <td><label for="manu">Menufacture Id</label></td><br>
        <td><input type="text" name="manu"></td><br>
    </tr>

    <tr> 
        
        <td><input type="submit" name="btnsub" value="submit"></td><br>
    </tr>
</form>