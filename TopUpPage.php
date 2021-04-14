<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <title>Cryt - Top Up</title>
</head>


<body class="backgroundGrad">

    <?php
    require 'php/Layout/Header.php';
    ?>

    <div class="container">
        <div class="topUpBox">
            <br>
        <h1>Top Up</h1>

        <div class="innerBox">
    <form action="TopUpPage.php" method="post">

        <label for="amount"></label>
        <input type="text" class="topUpForm" placeholder="Enter Amount:" name="amount">


        <input type="submit" class="topUpSubmit"value=Submit>
    </form>
            <br>
            Temporibus et mollitia odio sint error quas. Cum aut officiis quisquam harum perspiciatis qui. Quos neque dolorem velit et aut neque. Dolor quae quo dolorem sunt quia vero est aut. Sapiente quibusdam voluptates adipisci consequatur sed aspernatur.
    </div>
        </div>
        <div class="topUpBox">
            <h2>Receipt</h2>

        </div>
    <?php
    require 'php/Layout/Footer.php';
    ?>
    </div>




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
</body>
</html>

