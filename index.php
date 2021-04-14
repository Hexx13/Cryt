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
    <main class="indexMain">
    <div class="indexSpacer"></div>
    <div class="indexCenter">
        <div class="imageIndex">
            <img src="img/artist.png" class="imageIndex">
        </div>
        <div class="rowBox2">
            <div class="indexBox2"><a href ="Store.php">Strategy</a></div>
            <div class="indexBox2"><a href ="Store.php">Adventure</a></div>
            <div class="indexBox2"><a href ="Store.php">Shooter</a></div>
            <div class="indexBox2"><a href ="Store.php">RPG</a></div>
        </div>


        <div class="indexText">
            <p>Sale Showcase</p>
        </div>

        <div class="rowBox">
            <div class="indexBox indexBigBox"><a href ="Store.php">Game here<img src="img/GameBanners/gamer3.png" class="imageBox"></a></div>
            <div class="indexBox indexBigBox"><a href ="Store.php">Game here<img src="img/GameBanners/gamer3.png" class="imageBox"></a></div>
        </div>

        <div class="indexText">
            <p>Popular Titles</p>
        </div>

        <div class="rowBox">
                <div class="indexBox"><a href ="Store.php">Game here<img src="img/GameBanners/gamer2.png" class="imageBox"></a></div>
                <div class="indexBox"><a href ="Store.php">Game here<img src="img/GameBanners/gamer3.png" class="imageBox"></a></div>
                <div class="indexBox"><a href ="Store.php">Game here<img src="img/GameBanners/gamer4.png" class="imageBox"></a></div>
        </div>
        <div class="rowBox">
            <div class="indexBox"><a href ="Store.php">Game here<img src="img/GameBanners/gamer5.png" class="imageBox"></a></div>
            <div class="indexBox"><a href ="Store.php">Game here<img src="img/GameBanners/gamer6.png" class="imageBox"></a></div>
            <div class="indexBox"><a href ="Store.php">Game here<img src="img/GameBanners/spaceGame.png" class="imageBox"></a></div>
        </div>
    </div>
    <div class="indexSpacer">
    </div>
    </main>

        <?php
        require 'php/Layout/Footer.php';
        ?>


</body>
</html>