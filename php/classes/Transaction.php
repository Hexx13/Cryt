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

        $transactArray = Array($custArray['wallet_Id'], $currentDate, $amount);



    }
    public function transaction($transactionData,$amount, $accountID){
        $dataArray = $transactionData($amount, $accountID);
        $sql="insert into transaction (transaction_ID, dateTime, transaction_Amount, Wallet_wallet_ID) values ($dataArray[0], $dataArray[1], $dataArray[2])";

        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

    }
}