<?php
include "../TopUp.php";

$beans = new TopUp(0, 23);

echo $beans->getBalance(23);