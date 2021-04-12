<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
<?php
require 'php/Layout/Header.php';
?>


<main class="backgroundGrad">


    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Store Page</h1>
            </div>
        </div>
    </div>

   <!-- <div class="container2">
        <div class="row2">
            <div class = "game">
                <h1><?php /* echo $game['name']; */?></h1>
                <h2><?php /*echo $game['price']; */?></h2>
                <p><?php /*echo $game['about'] ?>*/ ?>
            </div>
        </div>
    </div> -->

    <form action="signup.php" method="post">

        <label for="gameName">Game Name: </label>
        <input type="text" name="gameName"><br>

        <label for="gameDesc">Game Description:</label>
        <input type="text" name="gameDesc"><br>

        <label for="gamePrice">Game Price:</label>
        <input type="text" name="gamePrice"><br>

        <label for="gameFilePath">Game File Path: </label>
        <input type="text" name="gameFilePath"><br>

        <label for="gameAuthor">Game Author: </label>
        <input type="password" name="gameAuthor"><br>

        <label for="gameID">Game ID: </label>
        <input type="password" name="password"><br>

        <input type="submit" value="Submit">
    </form>

    <div>
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






</main>
<?php
require 'php/Layout/Footer.php';
?>
</html>

