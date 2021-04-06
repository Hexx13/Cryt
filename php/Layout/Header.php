<html>
<?php
include "php/classes/Wallet.php";
$beans = new Wallet();
?>
<div class="header">
    <div class="leftHead">
        <div class="logoBox"></div>
        <div class="headerLinks">
            <a href="Index.php">Home</a>
            <a href="Index.php">Store</a>
            <a href="Index.php">Library</a>
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
</div>
<br><br><br><br><br><br>