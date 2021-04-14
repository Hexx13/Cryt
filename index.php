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
            <img src="img/logo.png" class="imageIndex">
        </div>

        <div class="indexText">
            <p>Our top picked games</p>
        </div>

        <div class="rowBox">
                <div class="indexBox">Box 1</div>
                <div class="indexBox">Box 2</div>
                <div class="indexBox">Box 3</div>
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