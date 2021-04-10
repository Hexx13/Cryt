<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body>

<main>
    <form action="loggedIn" method="post">

        <label for="username">Username: </label>
        <input type="text" name="username"><br>

        <label for="password">Password: </label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($_REQUEST["err"]))
        $msg="Invalid Login Details";
    ?>
    <p style="color:red;">
        <?php if(isset($message)){echo $message;} ?>

    </p>

</main>

</body>
</html>
