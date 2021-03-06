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
    <?php include_once 'php/Layout/Header.php'; ?>
<main class="indexMain">
    <div class="indexSpacer"></div>
    <div class="indexCenter">
        <div>
            <img src="<?php echo $gameArray['game_Img_Path']?>" class="gameImage">
        </div>
        <div>
        <div class="gamePageText"><?Php echo $gameArray['game_Name']; ?></div>
        <form action="Game.php?id='<?php echo $_REQUEST['id']?>'" method="post">
            <div class="gamePurchase">Purchase game €
                <?php echo trim($gameArray['game_Price']);?>
                <input type="hidden" value="<?php echo $gameArray['game_Price']?>" name="amount">
                <input type="submit" value="Purchase" class="gameSubmit" name="submit">
            </div>
        </div>
        </form>
        <div class="gameDescription">
            <?php echo $gameArray['game_Desc']; ?>
        </div>
        <div class="gamePurchase">
            <p>Review</p>
        </div>
        <div class="rowBox">
            <div class="indexBox reviewBigBox">This game is epic I love everything about it <3</div>
            <div class="indexBox reviewBigBox">This game has got terrible design</div>
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
        $transaction->transact($amount, $accountID);
    }
    include_once 'php/Layout/Footer.php';
    ?>
</body>



</html>