<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body>

<main>
    <form action="Login.php" method="POST">

        <label for="username">Username: </label>
        <input type="text" name="username"><br>

        <label for="password">Password: </label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Login" name="submit">
    </form>
    <a class="" href="signup.php">Sign up here</a>
    <?php
    if(isset($_REQUEST["err"]))
        $msg="Invalid username or Password";
    ?>
    <p style="color:red;">
        <?php if(isset($msg)) echo $msg; ?>
    <?php

    if (isset($_REQUEST['submit'])) {

        $usname = $_REQUEST['username'];
        $uspassword = $_REQUEST['password'];

        include_once "php/classes/Account.php";
        $account = new Account();
        $account->login($account->loginQuery($usname, $uspassword), $usname);

    }
        ?>

    </p>

</main>

</body>
</html>
