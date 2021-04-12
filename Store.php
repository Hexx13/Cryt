<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
<?php
require 'php/Layout/Header.php';
?>


<main class="backgroundGrad">


    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Store Page</h1>
            </div>
        </div>
    </div>









</main>
<?php
require 'php/Layout/Footer.php';
?>
</html>

