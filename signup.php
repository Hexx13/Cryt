<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
    <meta charset="UTF-8">
    <?php session_start();session_destroy(); ?>
    <title>Cryt</title>
</head>
<body class="backgroundGrad">
<div class="container">
    <div class="bannerGrad">
        <div class="space">
        </div>
        <div class="centerLogo">

            <img src="img/logo.png" class="centerLogo">
            <form action="signup.php" method="post">

                <label for="username">Username: </label>
                <input type="text" class="loginForms" name="username"><br>

                <label for="firstName">First name:</label>
                <input type="text" class="loginForms" name="firstName"><br>

                <label for="lastName">Last name:</label>
                <input type="text" class="loginForms" name="lastName"><br>


                <label for="email">Email: </label>
                <input type="text" class="loginForms" name="email"><br>

                <label for="password">Password: </label>
                <input type="password" class="loginForms" name="password"><br>

                <input type="submit" value="Submit">
            </form>
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

        $customer = new Customer($password,$username, $emailAddress,$firstName,$lastName);
        $customer->createAccountDB();
        header("location:login.php");
    }
    ?>


</body>
</html><!--
