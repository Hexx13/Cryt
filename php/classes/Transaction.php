<?php


class Transaction
{


    public function transactData($amount, $accountID){
        $currentDate = new date();
        $datetime = $currentDate->format('Y-m-d H:i:s');

        include_once ("Customer.php");
        $customer = new Customer();
        $custArray = $customer->getAccountDetails($accountID);

        //generate ids
        include_once ("IDManager.php");
        $manager = new IDManager();
        $id = $manager->generateID('transaction_ID', 'transaction');

        $transactArray = Array("walletId"=>$custArray['wallet_Id'], "date"=>$currentDate, "amount"=>$amount);



    }
    public function transaction($transactionData){
        $dataArr
    }
}