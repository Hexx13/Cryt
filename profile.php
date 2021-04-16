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


<div class="container">
    <div class="profileBox">

    <form action="profile.php" method="POST">
    <br><br>
        <label for="username"><h4>Change Username:</h4> </label>
        <input type="text" class="profileForms" name="username">
        <input type="hidden" value="account_Username" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>

    </form>

    <form action="profile.php" method="POST">

        <label for="password"><h4>Change Password: </h4></label>
        <input type="password" class="profileForms" name="column">
        <input type="hidden" value="account_Password" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>


    <form action="profile.php" method="POST" enctype="multipart/form-data">
        <label for="profilePic"><h4>Upload Profile Pic :</h4> </label>
        <input type="file" accept="image/*" name="profilePic">
        <input type="hidden" value="profilePic" name="formType">

        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>

    <form action="profile.php" method="POST">
        <label for="email"><h4>Change E-mail</h4> </label>
        <input type="email" class="profileForms" name="column">
        <input type="hidden" value="email_Address" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>

    <form action="profile.php" method="POST">
        <label for="firstName"><h4>Change First Name</h4> </label>
        <input type="text" class="profileForms" name="column">
        <input type="hidden" value="firstName" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>

    <form action="profile.php" method="POST">
        <label for="lastName"><h4>Change Last Name</h4> </label>
        <input type="text" class="profileForms" name="column">
        <input type="hidden" value="lastName" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>


        <a href="Logout.php"><h2><font color="white"><font size="2">Logout</font></font></h2></a>

</div>
    
</div>

<?php
require 'php/Layout/Footer.php';
?>

<?php

include_once "php/classes/Customer.php";
include_once "php/classes/Account.php";
$account = new Account();
$customer = new Customer();
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (!$_REQUEST['formType'] = 'profilePic') {

        $customer->changeDetails($_REQUEST["formType"], $account->getAccountID($_SESSION["username"]), $_REQUEST["column"]);
    } else {

        if (isset($_FILES['profilePic'])) {

            $picName = $_FILES['profilePic']['name'];
            $picDirectory = "img/profilePics/";
            $picPath = $picDirectory.$picName;


            move_uploaded_file($_FILES['profilePic']['tmp_name'], 'img/profilePics/' . $_FILES['profilePic']['name']);
            $customer->changePic($picPath,  $account->getAccountID($_SESSION["username"]));
        }

    }


}

?>

</body>
</html>

