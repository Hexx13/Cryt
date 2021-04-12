<!DOCTYPE html>
<?php
include_once "php/classes/Game.php";
session_start();
if (!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>

<main class="backgroundGrad">

    <?php
    require 'php/Layout/Header.php';
    ?>

    <?php
    $gamers = new Game();

    var_dump($gamers->getGameArray());
    ?>


    <?php
    require 'php/Layout/Footer.php';
    ?>

</main>

</html>

