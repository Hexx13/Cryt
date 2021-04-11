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
<body>

<main class="backgroundGrad">
    <?php
    require 'php/Layout/Header.php';
    ?>

    <div class="mainSideSpacer"></div>
    <div class="mainCenter">
        <div class="topBanner">
            <div class="slideShowBack">

            </div>
        </div>
        <div></div>
    </div>
    <div class="mainSideSpacer"></div>
    <a href="Logout.php"><h2><font color="red">Logout</font></h2>

        <?php
        require 'php/Layout/Footer.php';
        ?>
</main>

</body>
</html>