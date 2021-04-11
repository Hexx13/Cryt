<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body>
<?php

session_start();session_destroy();
require 'php/Layout/Header.php';
?>
<main>
    <form action="signup.php" method="post">

        <label for="username">Username: </label>
        <input type="text" name="username"><br>

        <label for="firstName">First name:</label>
        <input type="text" name="firstName"><br>

        <label for="lastName">Last name:</label>
        <input type="text" name="lastName"><br>


        <label for="email">Email: </label>
        <input type="text" name="email"><br>

        <label for="password">Password: </label>
        <input type="password" name="password"><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    require 'php/Layout/Footer.php';


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
</main>

</body>
</html>