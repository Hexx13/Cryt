<?php
include "php/Customer.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =  $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $emailAddress = $_REQUEST['email'];
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];

}

$customer = new Customer($password,$username, $emailAddress,$firstName,$lastName);
$customer->createAccountDB();