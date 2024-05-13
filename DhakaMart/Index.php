<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}


?>

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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

        <?php require("./Shared/Sidebar.php") ?>
        <div class="w-full mx-4 py-5">
            <?php
            if (isset($_GET["page"])) {
                if ($_GET["page"] === "dashboard") {
                    require("Dashboard.php");
                } elseif ($_GET["page"] === "viewproduct") {
                    require("ViewProduct.php");
                } elseif ($_GET["page"] === "viewdetails") {
                    require("ProductDetails.php");
                } elseif ($_GET["page"] === "edit") {
                    require("EditProduct.php");
                } elseif ($_GET["page"] === "order") {
                    require("Order.php");
                } elseif ($_GET["page"] === "user") {
                    require("User.php");
                } elseif ($_GET["page"] === "category") {
                    require("Category.php");
                } elseif ($_GET["page"] === "sub_category") {
                    require("Sub_Category.php");
                } elseif ($_GET["page"] === "brand") {
                    require("Brand.php");
                } elseif ($_GET["page"] === "user") {
                    require("User.php");
                }
            } else {
                require("Dashboard.php");
            }
            ?>
        </div>
    </div>

</body>

<script src="index.js"></script>

</html>