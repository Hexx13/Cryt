<html>
<?php
include "php/classes/Wallet.php";
$beans = new Wallet();
?>
<style>@import "../../Stylesheets/Headerfancy.css";</style>
<div class="header">
    <a href="#default" class="logo">Logo go here</a>
    <div class="header-right">
        <a class="active" href="#Index.php">Home</a>
        <a href="#Index.php">Store</a>
        <a href="#Index.php">Library</a>
    </div>
    <div class="topup">
        <a href="../../TopUpPage.php">  Balance:
            <?php
            echo $beans ->getBalance(23) //temporarily hardcoded until we figure out sessions
            ?> €  Top Up</a>
    </div>
</div>

</html>
<br><br><br><br><br><br>