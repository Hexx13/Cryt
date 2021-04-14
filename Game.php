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
    $gameArray = $gamers->getGame($_REQUEST['id']);
    ?>

    <div>
        <div>
            <form action="Game.php?id='<?php echo $_REQUEST['id']?>'" method="post">
            <h1>
                <?Php
                echo $gameArray['game_Name'];
                ?>
            </h1>
            <img src="<?php echo $gameArray['game_Img_Path']?>">
            <h3>
                <?php
                    echo $gameArray['game_Desc'];
                ?>
            </h3>
            <h2>

            </h2>
            <h2>Purhcase game €<?php echo trim($gameArray['game_Price']);?>
                <input type="submit" name="submit"></h2>

        </div>
    </div>


    <?php
    require 'php/Layout/Footer.php';
    ?>
</body>



</html>