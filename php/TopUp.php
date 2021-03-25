<?php
include "Wallet.php";

class TopUp extends Wallet
{

   public $wallet_ID;
    public function __construct($wallet_ID)
    {
        $this->wallet_ID=$wallet_ID;
    }

    public function topUp($amountToAdd, $id){
        $curBal = $this->getBalance($id);
        $topUpAmount = $amountToAdd + $curBal;

        //make connection
        $link = mysqli_connect("localhost",
            "root",
            "password",
            "mydb");

        // Check connection
        if ($link === false) {
            die("CANNOT CONNECT OH NO OH NO"
                . mysqli_connect_error());
        }

    }




}