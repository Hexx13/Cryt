<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body class="backgroundGrad">
    <?php
    require 'php/Layout/Header.php';
    include_once "php/classes/Game.php";
    $gamers = new Game();
    $gameArray = $gamers->getGame();
    ?>

    <div>
        <div>
            <h1>
                <?Php>
            </h1>
        </div>
    </div>


    <?php
    require 'php/Layout/Footer.php';
    ?>
</body>



</html>