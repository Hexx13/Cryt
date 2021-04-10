<html>
<?php
include "php/classes/Wallet.php";
$beans = new Wallet();
?>
<link rel="Stylesheets/Headerfancy.css">

<div class="header">
    <a href="#default" class="logo">Logo go here</a>
    <div class="header-right">
        <a class="active" href="#Index.php">Home</a>
        <a href="#Index.php">Store</a>
        <a href="#Index.php">Library</a>
    </div>
    <div class="topup">
        <a href="#Index.php">Top Up</a>
        <a href="#Index.php"></a>
    </div>
</div>

    <div class="headSpacer"></div>
    <div class="rightHead">
        <div class="balanceBox">
            Balance:
            <?php
            echo $beans ->getBalance(23) //temporarily hardcoded until we figure out sessions
            ?> €
            Wallet id: <?php
            echo 23 //temporarily hardcoded until we figure out sessions
            ?>
            <a class="balanceLink" href="../../TopUpPage.php">
              Top Up
            </a>
        </div>
        <div class="sign-upBox"></div>
        <div class="profPicBox"></div>
    </div>
</html>
<br><br><br><br><br><br>