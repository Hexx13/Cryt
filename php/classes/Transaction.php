<?php


class Transaction
{


    public function transactData($amount, $accountID){
        $currentDate = new DateTime();
        $datetime = $currentDate->format('Y-m-d H:i:s');

        include_once ("Customer.php");
        $customer = new Customer();
        $custArray = $customer->getAccountDetails($accountID);

        //generate ids
        include_once ("IDManager.php");
        $manager = new IDManager();
        $id = $manager->generateID('transaction_ID', 'transaction');
        $transactArray = Array($id, $currentDate, $amount,$custArray['Wallet_wallet_ID']);
        return $transactArray;


    }
    public function transact($amount, $accountID){
        $dataArray =$this->transactData($amount,$accountID);

        $sql="insert into transaction (transaction_ID, dateTime, transaction_Amount, Wallet_wallet_ID) values ($dataArray[0], $dataArray[1], $dataArray[2],$dataArray[3])";

        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        if ($res = mysqli_query($link, $sql)){
            $wallet = new Wallet();
            $walletID = $wallet->getWalletID($accountID);
            if($wallet->chargeWallet($amount, $walletID)){
                header('Location: /Library.php');
            }
            else{
                echo "Insufficient balance please top up <a href='TopUpPage.php'> top-up<a/>";
            }


        }else{
            echo "ERROR: OH GOD OH NO WHY aaaaaaaaaaaaaaaaaaaaa $sql. "
                . mysqli_error($link);
        }
    }
}