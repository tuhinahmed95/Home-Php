<?php session_start();

if (isset($_POST['btnsubmit'])) {
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];

    if ($user_name == "admin" && $pass_word == "admin") {
        $_SESSION['admin'] = $user_name;
        header("location: ../Dhaka-Mart");
    } else {
        $messege = "username or password is not correct";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h1 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #45a049;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #333;
        }
    </style>


</head>

<body class="bg-[#8d8c8c5e]">
    <div class="container">
        <div class="login-form">
            <h1 class="text-2xl font-bold">Admin Login</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" required>
                </div>
                <input type="submit" class="btn" name="btnsubmit" value="Login">

            </form>
            <?php
            echo isset($messege) ? "<h1 class=' pt-2 text-red-800'>$messege</h1>" : "";
            ?>
        </div>
    </div>

</body>

</html>