<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))
    header("location:login.php");
?>
<html lang="en">
<head>
    <?php require 'php/Layout/headLinks.php';?>
    <title>Cryt - Library</title>
</head>
<body class="backgroundGrad">

<?php
require 'php/Layout/Header.php';
?>


<?php require 'php/Layout/Footer.php'; ?>


</body>
</html>
