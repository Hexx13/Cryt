<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body>
<?php
require 'php/Layout/Header.php';
?>
<main>
    <form action="php/proccessed/signedup.php" method="post">

        <label for="username">Username: </label>
        <input type="text" name="username"><br>

        <label for="firstName">First name:</label>
        <input type="text" name="firstName"><br>

        <!--<label for="lastName">Last name:</label>-->
        <label>
            <input type="text" name="lastName">
        </label><br>

        <label for="email">Email: </label>
        <input type="email" name="email"><br>

        <label for="password">Password: </label>
        <input type="password" name="password"><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    require 'php/Layout/Footer.php';
    ?>
</main>

</body>
</html>