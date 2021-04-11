<html>
<?php
include "php/classes/Wallet.php";
$beans = new Wallet();
?>
<style>@import "../../Stylesheets/stylesheet.css";</style>
<div class="header" style="padding: 0;">

    <div class="header-left">
        <img src="img/logo.png" class="logo">
        <a class="pagebutton" href="Index.php">Home</a>
        <a class="pagebutton" href="Store.php">Store</a>
        <a class="pagebutton" href="Library.php">Library</a>
    </div>
    <div class="spacer"></div>
    <div class="header-right">
        <a class="pagebutton"  id="topupBut" " href="../../TopUpPage.php">  Balance:
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
    <div class="profile">
        <a class = "profile_link" href="profile.php"><img src="img/default_pfp.png" class="profilePicture"></a>
    </div>
</div>

</html>
