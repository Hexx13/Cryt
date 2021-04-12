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

    $gamers = new Game();

    $gameArray = $gamers->getGameArray();

    ?>

        <div class = "gameContainer">
        <?PHP foreach($gameArray as $game){ ?>


                <div class="gameBoxDesign">
                    <h2><?PHP echo $game['game_Name']?></h2>
                <?PHP

                echo $game['game_Desc'];
                echo "<br>";
                echo $game['game_Price'];
                echo "<br>";
                echo $game['game_File_Path'];
                echo "<br>";
                echo "<br>";
                ?>
                </div>
                <!-- add path for images for ez shane slideshow -->


        </div>
        <?PHP } ?>





    <?php
    require 'php/Layout/Footer.php';
    ?>

</main>

</html>
