<?php


class Transaction
{


    public function transact($amount, $accountID){
        $currentDate = new date();
        $datetime = $currentDate->format('Y-m-d H:i:s');

        include_once ("Customer.php");
        $customer = new Customer();
        $custArray = $customer->getAccountDetails();

        $transactArray = Array("walletId"=>$custArray['wallet_Id'], )


    }
}