<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php
include_once 'php/Layout/Header.php';
include_once "php/classes/Game.php";
$gamers = new Game();
$gameArray = $gamers->getGame($_REQUEST['id']);
?>
<head>
    <?php include_once 'php/Layout/headLinks.php';?>
    <title>Cryt - <?php echo $gameArray['game_Name']; ?></title>
</head>
<body class="backgroundGrad">
    <?php include_once 'php/Layout/Header.php';?>



<main class="indexMain">
    <div class="indexSpacer"></div>
    <div class="indexCenter">
        <div>
            <form action="Game.php?id='<?php echo $_REQUEST['id']?>'" method="post">
                <img src="<?php echo $gameArray['game_Img_Path']?>" class="gameImage">
        </div>

        <p class="gamePageText"><?Php echo $gameArray['game_Name']; ?></p>

        <div class="gamePurchase">Purchase game €<?php echo trim($gameArray['game_Price']);?><input type="submit" class="gameSubmit" name="submit"></div>


        <div class="gameDescription"><?php echo $gameArray['game_Desc']; ?></div>
    </div>
    <div class="indexSpacer">
    </div>
</main>
    <?php
    include_once 'php/Layout/Footer.php';
    ?>
</body>



</html>