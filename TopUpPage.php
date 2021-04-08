<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>

    <?php
    require 'php/Layout/Header.php';
    ?>

<main>
    <form action="php/proccessed/toppedUp.php" method="post">

        <label for="amount">Enter Amount: </label>
        <input type="text" name="amount"><br>

        <label for="amount">Enter wallet id: </label>
        <input type="text" name="id"><br>

        <input type="submit" value="Submit">
    </form>

</main>

    <?php
    require 'php/Layout/Footer.php';
    ?>

</html>

