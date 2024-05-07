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
                    $cID = $_GET['id'];
                    $conn = mysqli_connect('localhost', 'root', '', 'dhakamart');
                    $query = "SELECT * FROM category WHERE id= '$cID' LIMIT 1";
                    $query_run = mysqli_query($conn,  $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                ?>
                            <form action="ViewCode.php" method="post">
                                <input name="id" value="<?php echo $row["id"] ?>" type="hidden" class="input-field"><br>
                                <label for="name">Category Name</label><br>


                                <input name="name" value="<?php echo $row["name"] ?>" type="text" id="name" class="input-field"><br>


                                <label for="brand_id">Brand</label><br>
                                <select  class="select-field" name="brand_id"         id="brand_id">
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
                            

                                <div class="modal-action modal_btn">
                                    <button class="btn" type="submit" name="update_category">Update</button>
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