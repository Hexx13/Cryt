<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body>

<main>
    <form action="Login.php" method="post">

        <label for="username">Username: </label>
        <input type="text" name="username"><br>

        <label for="password">Password: </label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Login" name="sub">
    </form>

    <?php
    if (isset($_REQUEST["err"]))
        $msg = "Invalid Login Details";
    ?>
    <p style="color:red;">
        <?php if (isset($message)) {
            echo $message;
        } ?>

    </p>
    <?php
    if (isset($_REQUEST['submit'])) {
        $usname = $_REQUEST['username'];
        $uspassword = $_REQUEST['password'];

        $db = new Database();
        $link = $db->getLink();

        $sql = "select* from users where account_username='$usname'and account_Password='$uspassword'";

        $res = mysqli_query($link, $sql);
        $result = mysqli_fetch_array($res);
        if ($result) {

            $_SESSION["login"] = "1";
            header("location:index.php");
        } else {
            header("location:login.php?err=1");

        }
    }
    ?>
</main>

</body>
</html>
