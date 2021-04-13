<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");

?>
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
        <div class="imageIndex">
            <img src="img/logo.png" class="imageIndex">
        </div>

        <div class="indexText">
            <p>Our top picked games</p>
        </div>

    <div class="gameBoxDesign">

    </div>



        <?php
        require 'php/Layout/Footer.php';
        ?>


</body>
</html>