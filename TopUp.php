<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    require 'php/Layout/Header.php';
    ?>

<main>
    <form action="php/TopUp.php" method="addAmount">

        <label for="amount">Enter Amount: </label>
        <input type="text" name="amount"><br>

        <input type="submit" value="Submit">
    </form>

</main>

    <?php
    require 'php/Layout/Footer.php';
    ?>

</html>

