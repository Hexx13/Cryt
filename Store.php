<!DOCTYPE html>
<?php
include_once "php/classes/Game.php";
session_start();
if (!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>

<body class="backgroundGrad">


<?php
require 'php/Layout/Header.php';

$gamers = new Game();

$gameArray = $gamers->getGameArray();

?>
<div class="mainContainerGame">
    <div class="gameSpacerSide"></div>
    <div class="gameContainer">
        <?PHP foreach ($gameArray as $game) { ?>
            <a class="gameBoxDesign" style="background-image:url('<?PHP echo $game['game_Img_Path'] ?>' )">

                <div class="storePageBoxTitle"> <?PHP echo $game['game_Name']; ?> </div>
                <?PHP echo $game['game_Price']; ?>
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
