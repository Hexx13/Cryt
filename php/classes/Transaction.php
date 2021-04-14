<?php


class Transaction
{


    public function transact($amount, $accountID){
        $currentDate = new date();
        include_once ("Customer.php");
        $datetime = $currentDate->format('Y-m-d H:i:s');


    }
}