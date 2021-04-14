<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"/>
    <meta charset="UTF-8">
    <title>Cryt - Profile</title>
</head>
<body class="backgroundGrad">


<?php
require 'php/Layout/Header.php';
?>

<div class="backgroundGrad">


    <form action="profile.php" method="POST">

        <label for="username">Change Username: </label>
        <input type="text" class="" name="username">
        <input type="hidden" value="account_Username" name="formType">
        <input type="submit" value="Submit" name="submit">
        <br> <br>

    </form>

    <form action="profile.php" method="POST">

        <label for="password">Change Password: </label>
        <input type="password" class="" name="column">
        <input type="hidden" value="account_Password" name="formType">
        <input type="submit" value="Submit" name="submit">
        <br> <br>
    </form>


    <form action="profile.php" method="POST" enctype="multipart/form-data">
        <label for="profilePic">Upload Profile Pic : </label>
        <input type="file" accept="image/*" name="profilePic">
        <input type="hidden" value="profilePic" name="formType">

        <input type="submit" value="Submit" name="submit">
        <br> <br>
    </form>

    <form action="profile.php" method="POST">
        <label for="email">Change E-mail </label>
        <input type="email" class="" name="column">
        <input type="hidden" value="email_Address" name="formType">
        <input type="submit" value="Submit" name="submit">
        <br> <br>
    </form>

    <form action="profile.php" method="POST">
        <label for="firstName">Change First Name </label>
        <input type="text" class="" name="column">
        <input type="hidden" value="firstName" name="formType">
        <input type="submit" value="Submit" name="submit">
        <br> <br>
    </form>

    <form action="profile.php" method="POST">
        <label for="lastName">Change Last Name </label>
        <input type="text" class="" name="column">
        <input type="hidden" value="lastName" name="formType">
        <input type="submit" value="Submit" name="submit">
        <br> <br>
    </form>


    <a href="Logout.php"><h2><font color="white"><font size="2">Logout</font></font></h2>

</div>
<?php
require 'php/Layout/Footer.php';
?>

<?php

include "php/classes/Customer.php";
include_once "php/classes/Account.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $account = new Account();
    $customer = new Customer();
    if (!$_REQUEST['formType'] = 'profilePic') {

        $customer->changeDetails($_REQUEST["formType"], $account->getAccountID($_SESSION["username"]), $_REQUEST["column"]);
    } else {

        if (isset($_FILES['profilePic'])) {

            $picName = $_FILES['profilePic']['name'];
            $picDirectory = "img/GameBanners/";
            $picPath = $picDirectory.$picName;


            move_uploaded_file($_FILES['profilePic']['tmp_name'], 'img/GameBanners/' . $_FILES['profilePic']['name']);
            $customer->changePic($picPath,  $account->getAccountID($_SESSION["username"]));
        }

    }


}
?>

</body>
</html>

