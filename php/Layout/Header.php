<html>
<?php
include "../Wallet.php";
$beans = new Wallet();
?>
<div class="header">
    <div class="leftHead">
        <div class="logoBox"></div>
        <div class="headerLinks">
            <a href="Index.html">Home</a>
            <a href="Index.html">Store</a>
            <a href="Index.html">Library</a>
        </div>
    </div>

    <div class="headSpacer"></div>
    <div class="rightHead">
        <div class="balanceBox">
            <a class="balanceLink">
                Balance:
                <?php
                echo $beans ->getBalance(23) //temporarily hardcoded until we figure out sessions
                ?> €
            </a>
        </div>
        <div class="sign-upBox"></div>
        <div class="profPicBox"></div>
    </div>
</div>