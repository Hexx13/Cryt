<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))
    header("location:login.php");
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <title>Cryt - Library</title>
</head>
<body class="backgroundGrad">

<?php
require 'php/Layout/Header.php';
?>


<?php require 'php/Layout/Footer.php'; ?>


</body>
</html>
