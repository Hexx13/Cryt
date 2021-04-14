<!DOCTYPE html>
<?php

session_start();
if (!isset($_SESSION["login"]))

    header("location:login.php");
?>
<head>
    <?php require 'php/Layout/headLinks.php';?>
    <title>Cryt - Store</title>
</head>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>

<body class="backgroundGrad">


<?php
require 'php/Layout/Header.php';
include_once "php/classes/Game.php";
$gamers = new Game();
$gameArray = $gamers->getGameArray();

?>
<div class="mainContainerGame">
    <div class="gameSpacerSide"></div>
    <div class="gameContainer">
        <div class="indexText">
            <h1>Our Games</h1>
        </div>
        <?PHP foreach ($gameArray as $game) { ?>
            <a class="gameBoxDesign" href="Game.php?id=<?PHP echo $game['game_ID']?>" style="background-image:url('<?PHP echo $game['game_Img_Path'] ?>' )">

                <div class="storePageBoxTitle"> <?PHP echo $game['game_Name']; ?> </div>
                <div class="storePriceParent">
                    <p class="storePageBoxPrice"><?PHP echo $game['game_Price']; ?></p>
                </div>
            </a>
            <!-- add path for images for ez shane slideshow -->
        <?PHP } ?>

    </div>
    <div class="gameSpacerSide"></div>
</div>


<?php
require 'php/Layout/Footer.php';
?>

</body>

</html>
