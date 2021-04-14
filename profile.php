<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body class="backgroundGrad">


<?php
require 'php/Layout/Header.php';
?>
<div class="backgroundGrad">


    <form action="Login.php" method="POST">

        <label for="username">Change Username: </label>
        <input type="text" class="" name="username">
        <input type="submit" value="Login" name="submit">
        <br>  <br>

    </form>

    <form action="Login.php" method="POST">

        <label for="username">Change Password: </label>
        <input type="text" class="" name="username">
        <input type="submit" value="Login" name="submit">
        <br>  <br>
    </form>

    <form action="Login.php" method="POST">
        <label for="username">Upload Profile Pic : </label>
        <input type="text" class="" name="username">
        <input type="submit" value="Login" name="submit">
        <br>  <br>
    </form>

    <form action="Login.php" method="POST">
        <label for="username">Change E-mail </label>
        <input type="text" class="" name="username">
        <input type="submit" value="Login" name="submit">
        <br>  <br>
    </form>

    <form action="Login.php" method="POST">
        <label for="username">Change First Name </label>
        <input type="text" class="" name="username">
        <input type="submit" value="Login" name="submit">
        <br>  <br>
    </form>

    <form action="Login.php" method="POST">
        <label for="username">Change Last Name </label>
        <input type="text" class="" name="username">
        <input type="submit" value="Login" name="submit">
        <br>  <br>
    </form>


    <a href="Logout.php"><h2><font color="white"><font size="2">Logout</font></font></h2>

</div>
<?php
require 'php/Layout/Footer.php';
?>


</body>
</html>

