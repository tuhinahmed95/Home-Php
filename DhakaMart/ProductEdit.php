<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mart-Dhaka</title>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <!-- custom css file -->
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <?php require("./Shared/Navbar.php"); ?>
    <div class="flex">
        <div class="w-[22%] min-h-screen bg-[#0E1428]">
            <?php require("./Shared/Sidebar.php") ?>
        </div>

        <div class=" w-full mx-4 py-5">
            <div class="w-3/6 mx-auto">
                <?php
                if (isset($_GET['id'])) {
                    $pID = $_GET['id'];
                    $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
                    $query = "SELECT * FROM product WHERE id= '$pID' LIMIT 1";
                    $query_run = mysqli_query($conn,  $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                ?>
                            <form action="ViewCode.php" method="post">

                                <input name="id" value="<?php echo $row["id"] ?>" type="hidden" class="input-field"><br>


                                <label for="image">Product Image</label><br>
                                <input name="image" value="<?php echo $row["image"] ?>" type="text" id="image" class="input-field"><br>


                                <label for="name">Product Name</label><br>
                                <input name="name" value="<?php echo $row["name"] ?>" type="text" id="name" class="input-field"><br>


                                
                                <label for="previous_price">Previous Price</label><br>
                                <input name="previous_price" value="<?php echo $row["previous_price"] ?>" type="text" id="previous_price" class="input-field"><br>


                                <label for="discount">Discount</label><br>
                                <input name="discount" value="<?php echo $row["discount"] ?>" type="text" id="discount" class="input-field"><br>


                                <label for="present_price">Present Price</label><br>
                                <input name="present_price" value="<?php echo $row["present_price"] ?>" type="text" id="present_price" class="input-field"><br>


                                <label for="quantity">Quantity</label><br>
                                <input name="quantity" value="<?php echo $row["quantity"] ?>" type="text" id="quantity" class="input-field" style="width:50px"><br>


                                <label for="unit">Unit</label><br>
                                <select name="unit" id="unit" class="select-field">
                                    <option value="KG">KG</option>
                                    <option value="Pound">Pound</option>
                                    <option value="Piece">Piece</option>
                                </select><br>


                                <label for="coupon">Coupon</label><br>
                                <input name="coupon" value="<?php echo $row['coupon']?>" type="text" id="coupon" class="input-field"><br>


                                <label for="brand_id">Brand</label><br>
                                <select  class="select-field" name="brand_id" id="brand_id">
                                    <?php
                                        $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
                                        $query = "SELECT * FROM brand";
                                        $query_run = mysqli_query($conn,  $query);
                                        if (mysqli_num_rows($query_run)>0) {
                                        foreach ($query_run as $row) {
                                        ?>
                                        <option value="<?php echo $row['id']?>"><?php echo $row ['name']?></option>
                                        <?php
                                    }
                                    }
                                    ?>
                                
                                </select><br>

            
                                <label for="cat_id">Category</label><br>
                                <select  class="select-field" name="cat_id" id="cat_id">
                                    <?php
                                        $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
                                        $query = "SELECT * FROM category";
                                        $query_run = mysqli_query($conn,  $query);
                                        if (mysqli_num_rows($query_run)>0) {
                                        foreach ($query_run as $row) {
                                        ?>
                                        <option value="<?php echo $row['id']?>"><?php echo $row ['name']?></option>
                                        <?php
                                    }
                                    }
                                    ?>
                                </select><br>


                                <label for="sub_cat_id">Sub-Category</label><br>
                                <select name="sub_cat_id" id="sub_cat_id" class="select-field">
                                    <?php
                                        $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
                                        $query = "SELECT * FROM sub_category ";
                                        $query_run = mysqli_query($conn,  $query);
                                        if (mysqli_num_rows($query_run)>0) {
                                        foreach ($query_run as $row) {
                                        ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo $row ['name']?></option>
                                        <?php
                                    }
                                    }
                                    ?>
                                </select><br>

                                <div class="modal-action modal_btn">
                                    <button class="btn" type="submit" name="update">Update</button>
                                </div>

                            </form>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>

<script src="index.js"></script>

</html>