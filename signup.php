<!DOCTYPE html>

<html lang="en">
<head>
    <?php require 'php/Layout/headLinks.php';?>
    <?php session_start();session_destroy(); ?>
    <title>Cryt - Sign Up</title>
</head>
<body class="backgroundGrad">
<div class="container">
    <div class="bannerGrad">

        <div class="centerLogo">

            <img src="img/logo.png" class="centerLogo">
        </div>
            <form action="signup.php" method="post">

                <label for="username"></label>
                <input type="text" class="loginForms" placeholder="Username: " name="username"><br><br>

                <label for="firstName"></label>
                <input type="text" class="loginForms" placeholder="First name:" name="firstName"><br><br>

                <label for="lastName"></label>
                <input type="text" class="loginForms" placeholder="Last name:" name="lastName"><br><br>


                <label for="email"> </label>
                <input type="text" class="loginForms" placeholder="Email:" name="email"><br><br>

                <label for="password"></label>
                <input type="password" class="loginForms" placeholder="Password:" name="password"><br><br>

                <input type="submit" class="loginSubmit" value="Submit"><br>
            </form>
            <a href ="Login.php">Already have an account? Click here to login</a>

        </div>


</div>

    <?php

    include "php/classes/Customer.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $emailAddress = $_REQUEST['email'];
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];

        $customer = new Customer();
        $customer->setAll($password,$username, $emailAddress,$firstName,$lastName);
        $customer->createAccountDB();
        header("location:login.php");
    }
    ?>


</body>
</html><!--
