<!DOCTYPE html>
<?php

session_start();
if (!isset($_SESSION["login"]))

    header("location:login.php");
?>
<head>
    <?php include_once 'php/Layout/headLinks.php';?>
    <title>Cryt - Store</title>
</head>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>

<body class="backgroundGrad">


<?php
include_once 'php/Layout/Header.php';
include_once "php/classes/Game.php";
$gamers = new Game();
$gameArray = $gamers->getGameArray();

?>
<div class="mainContainerGame">
    <div class="gameSpacerSide"></div>
    <div class="gameContainer">
        <?PHP foreach ($gameArray as $game) { ?>
            <a class="gameBoxDesign" href="Game.php?id=<?PHP echo $game['game_ID']?>" style="background-image:url('<?PHP echo $game['game_Img_Path'] ?>' )">

                <div class="storePageBoxTitle"> <?PHP echo $game['game_Name']; ?> </div>

                <div class="storePriceParent">
                    <p class="storePageBoxPrice"><?PHP echo $game['game_Price']; ?></p>
                </div>
            </a>

        <?PHP } ?>

    </div>
    <div class="gameSpacerSide"></div>
</div>


<?php
include_once 'php/Layout/Footer.php';
?>

</body>

</html>
