<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");
    include_once "php/classes/Game.php";
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
    $gamers = new Game();
    $gameArray = $gamers->getGameArray();
    ?>
        <div class="imageIndex">
            <img src="img/logo.png" class="imageIndex">
        </div>

        <div class="indexText">
            <p>Our top picked games</p>
        </div>
    <div class="mainContainerGame">
        <div class="gameSpacerSide"></div>
        <div class="gameContainer">
            <?PHP foreach ($gameArray as $game) { ?>
                <a class="gameBoxDesign" style="background-image:url('<?PHP echo $game['game_Img_Path'] ?>' )">

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
        require 'php/Layout/Footer.php';
        ?>


</body>
</html>