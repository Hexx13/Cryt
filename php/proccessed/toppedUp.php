<a href="../../index.php">Back to the home page!</a>

<?php



include "../classes/TopUp.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_REQUEST['amount'];
    $id = $_REQUEST['id'];
    $beans = new TopUp();
    $beans->topUpWallet($amount, $id);
}

?>




