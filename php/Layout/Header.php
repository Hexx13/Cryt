<html>
<?php
include "php/classes/Wallet.php";
$beans = new Wallet();
?>
<style>@import "../../Stylesheets/stylesheet.css";</style>
<div class="header">
    <a href="#default" class="logo">Logo go here</a>
    <div class="header-right">
        <a class="active" href="Index.php">Home</a>
        <a href="Index.php">Store</a>
        <a href="Index.php">Library</a>
    </div>
    <div class="topup">
        <a href="../../TopUpPage.php">  Balance:
            <?php
            include_once "php/classes/Account.php";
            include_once "php/classes/Wallet.php";
            $account = new Account();
            $wallet = new Wallet();

            $accountID = $account->getAccountID($_SESSION["username"]);
            $walletID = $wallet->getWalletID($accountID);
            echo $beans ->getBalance($walletID);

            ?> €  Top Up</a>
    </div>
</div>

</html>
<br><br><br><br><br><br>