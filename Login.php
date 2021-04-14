<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <?php require 'php/Layout/headLinks.php';?>
    <title>Cryt - Login</title>
</head>
<body class="backgroundGrad">
<div class="container">
  <div class="bannerGrad">





    <div class="centerLogo">

    <img src="img/logo.png" class="centerLogo">

    </div>
    <form action="Login.php" method="POST">

        <label for="username"></label>
        <input type="text" class="loginForms" placeholder="Username:" name="username"><br><br>

        <label for="password"></label>
        <input type="password" id="password" class="loginForms" placeholder="Password:" name="password"><br><br>

        <input type="submit" value="Login" class="loginSubmit" name="submit">
    </form>
      <div class="space">    <a class="" href="signup.php">Sign up here</a></div>


    </div>



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
     </div>
     </div>
    </div>
</div>
</body>
</html>
