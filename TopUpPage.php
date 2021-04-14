<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">
<head>


<body class="backgroundGrad">

    <?php
    require 'php/Layout/Header.php';
    ?>
    <div class="container">
        <div class="topUpBox">
            <br>
        <h1>Top Up</h1>

        <br><br><br><br>
    <form action="TopUpPage.php" method="post">

        <label for="amount"><h2>Enter Amount:</h2> </label>
        <input type="text" class="topUpForm" name="amount"><br>


        <input type="submit" value="Submit">
    </form>
    </div>

    <?php
    require 'php/Layout/Footer.php';
    ?>
    </div>

</body>


    <?php
    include_once "php/classes/Account.php";
    include_once "php/classes/Wallet.php";
    include_once "php/classes/TopUp.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $amount = $_REQUEST['amount'];
            $beans = new TopUp();
            $account = new Account();
            $wallet = new Wallet();
            $accountID = $account->getAccountID($_SESSION["username"]);
            $walletID = $wallet->getWalletID($accountID);
            $beans->topUpWallet($amount, $walletID);
            header('Location: /index.php');
        }
    ?>
</body>>
</html>

