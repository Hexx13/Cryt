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
            <div class = "gameContainer">
                <?PHP foreach($gameArray as $game){ ?>
                    <div claSS="gameBoxDesign">
                        <h2><?PHP echo $game['game_Name']?></h2>
                        <?PHP
                        echo $game['game_Desc'];
                        echo "<br>";
                        echo $game['game_Price'];
                        echo "<br>";
                        $path = $game['game_File_Path'];
                        echo "<a href='$path'> banana</a>";

                        echo "<br>";
                        echo "<br>";
                        ?>
                    </div>
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
