<?php
// ProDuct Table
$conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
if (isset($_POST['add_product'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $previous_price = $_POST['previous_price'];
    $discount = $_POST['discount'];
    $present_price = $_POST['present_price'];
    $brand_id = $_POST['brand_id'];
    $cat_id = $_POST['cat_id'];
    $sub_cat_id = $_POST['sub_cat_id'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $coupon = $_POST['coupon'];
    $sql = "INSERT INTO product ( image, name, previous_price, discount, present_price, brand_id, cat_id, sub_cat_id, quantity, unit, coupon)
    VALUES ( '$image', '$name',' $previous_price','$discount', '$present_price', '$brand_id', '$cat_id', '$sub_cat_id', '$quantity', '$unit', '$coupon')";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        header('Location:index.php?page=viewproduct');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $previous_price = $_POST['previous_price'];
    $discount = $_POST['discount'];
    $present_price = $_POST['present_price'];
    $brand_id = $_POST['brand_id'];
    $cat_id = $_POST['cat_id'];
    $sub_cat_id = $_POST['sub_cat_id'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $coupon = $_POST['coupon'];

    $sql = "UPDATE product SET image='$image' ,name='$name' , previous_price='$previous_price' ,discount='$discount' ,present_price='$present_price' ,brand_id='$brand_id' ,cat_id='$cat_id' ,sub_cat_id='$sub_cat_id' ,quantity='$quantity' ,unit='$unit' ,coupon='$coupon' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        header('Location:index.php?page=viewproduct');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
if (isset($_POST["delete"])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM product WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {

        header('Location:index.php?page=viewproduct');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}





// Brand Table
if (isset($_POST['add_brand'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
  
    $sql = "INSERT INTO brand ( id, name)
    VALUES ( '$id', '$name')";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        header('Location:index.php?page=brand');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['update_brand'])) {
    $id = $_POST["id"];
    $name = $_POST['name'];

    $sql = "UPDATE brand SET name='$name' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        header('Location:index.php?page=brand');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST["delete_brand"])) {
    $id = $_POST['delete_brand'];
    $sql = "DELETE FROM brand WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {

        header('Location:index.php?page=brand');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}






// Category Table
if (isset($_POST['add_category'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $brand_id = $_POST['brand_id'];
  
    $sql = "INSERT INTO category ( id, name, brand_id)
    VALUES ( '$id', '$name', '$brand_id')";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        header('Location:index.php?page=category');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['update_category'])) {
    $id = $_POST["id"];
    $name = $_POST['name'];
    $brand_id = $_POST['brand_id'];

    $sql = "UPDATE category SET name='$name', brand_id='$brand_id' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        header('Location:index.php?page=category');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST["delete_cat"])) {
    $id = $_POST['delete_cat'];
    $sql = "DELETE FROM category WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {

        header('Location:index.php?page=category');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}





// Sub Category Table
if (isset($_POST['add_sub_category'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $brand_id = $_POST['brand_id'];
    $cat_id = $_POST['cat_id'];
  
    $sql = "INSERT INTO sub_category ( id, name, brand_id, cat_id)
    VALUES ( '$id', '$name', '$brand_id', '$cat_id')";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        header('Location:index.php?page=sub_category');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['update_sub_category'])) {
    $id = $_POST["id"];
    $name = $_POST['name'];
    $brand_id = $_POST['brand_id'];
    $cat_id = $_POST['cat_id'];

    $sql = "UPDATE sub_category SET name='$name', brand_id='$brand_id', cat_id='$cat_id' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        header('Location:index.php?page=sub_category');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST["delete_sub_cat"])) {
    $id = $_POST['delete_sub_cat'];
    $sql = "DELETE FROM sub_category WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {

        header('Location:index.php?page=sub_category');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



// user table
$connect = mysqli_connect("localhost","root","","dhakamart");
if(isset($_POST['user_btn'])){ 
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $role_id = $_POST['role_id'];
    $userInsert = "INSERT INTO user(name,email,role_id)VALUES('$name','$email','$role_id')";
    $query = mysqli_query($connect,$userInsert);
    if($query){ 
        header('location:index.php?page=user');
    }
    else{ 
        echo"Error: " .mysqli_error($connect);
    }
}


if (isset($_POST['update_user'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST['email'];
    $role_id = $_POST['role_id'];


    $sql = "UPDATE user SET name='$name', email='$email', role_id='$role_id'  WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        header('Location:index.php?page=user');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



if (isset($_POST["delete_user"])) {
    $id = $_POST['delete_user'];
    $sql = "DELETE FROM user WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {

        header('Location:index.php?page=user');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



// role table
$connect = mysqli_connect("localhost","root","","dhakamart");
if(isset($_POST['user_btn'])){ 
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    
    $userInsert = "INSERT INTO role(name,email)VALUES('$name','$email',)";
    $query = mysqli_query($connect,$userInsert);
    if($query){ 
        header('location:index.php?page=user');
    }
    else{ 
        echo"Error: " .mysqli_error($connect);
    }
}