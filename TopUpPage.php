<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">
<head>



<main class="backgroundGrad">
    <?php
    require 'php/Layout/Header.php';
    ?>
    <form action="TopUpPage.php" method="post">

        <label for="amount">Enter Amount: </label>
        <input type="text" name="amount"><br>


        <input type="submit" value="Submit">
    </form>
    <?php
    require 'php/Layout/Footer.php';
    ?>
</main>




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

</html>

