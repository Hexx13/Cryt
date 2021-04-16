<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <?php include_once 'php/Layout/Header.php'; ?>
<main class="indexMain">
    <div class="indexSpacer"></div>
    <div class="indexCenter">
        <div>
            <img src="<?php echo $gameArray['game_Img_Path']?>" class="gameImage">
        </div>
        <p class="gamePageText"><?Php echo $gameArray['game_Name']; ?></p>
        <form action="Game.php?id='<?php echo $_REQUEST['id']?>'" method="post">
            <div class="gamePurchase">Purchase game €
                <?php echo trim($gameArray['game_Price']);?>
                <input type="submit" value="Purchase" class="gameSubmit" name="submit">
            </div>
        </form>
        <div class="gameDescription">
            <?php echo $gameArray['game_Desc']; ?>
        </div>
        <div class="gamePurchase">
            <p>Review</p>
        </div>
    </div>
    <div class="indexSpacer"></div>
</main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_REQUEST['amount'];
        include_once "php/classes/Transaction.php";
        $account = new Account();
        $accountID = $account->getAccountID($_SESSION["username"]);
        $transaction = new Transaction();
        $transaction->transaction($amount, $accountID);
    }
    include_once 'php/Layout/Footer.php';
    ?>
</body>



</html>