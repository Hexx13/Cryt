<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))
    header("location:login.php");
?>
<html lang="en">
<head>
    <?php require 'php/Layout/headLinks.php';?>
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
            <div class="indexBox2"><br>Strategy</a></div>
            <div class="indexBox2"><br>Adventure</a></div>
            <div class="indexBox2"><br>Shooter</a></div>
            <div class="indexBox2"><br>RPG</a></div>
        </div>


        <div class="indexText">
            <p>Sale Showcase</p>
        </div>

        <div class="rowBox">
            <div class="indexBox indexBigBox">Game here<img src="img/GameBanners/obamaindahood.png" class="imageBox"></a></div>
            <div class="indexBox indexBigBox">Game here<img src="img/GameBanners/gamer7.png" class="imageBox"></a></div>
        </div>

        <div class="indexText">
            <p>Popular Titles</p>
        </div>

        <div class="rowBox">
                <div class="indexBox">Game here<img src="img/GameBanners/rudolphsflight.png" class="imageBox"></a></div>
                <div class="indexBox">Game here<img src="img/GameBanners/operationraven.png" class="imageBox"></a></div>
                <div class="indexBox">Game here<img src="img/GameBanners/gridlocked.png" class="imageBox"></a></div>
        </div>
        <div class="rowBox">
            <div class="indexBox">Game here<img src="img/GameBanners/gamer7.png" class="imageBox"></a></div>
            <div class="indexBox">Game here<img src="img/GameBanners/bullethellbill.png" class="imageBox"></a></div>
            <div class="indexBox">Game here<img src="img/GameBanners/spacewar.png" class="imageBox"></a></div>
        </div>
    </div>
    <div class="indexSpacer">
    </div>
    </main>

        <?php require 'php/Layout/Footer.php'; ?>


</body>
</html>