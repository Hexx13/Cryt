<?php

include "IDManager.php";
class Wallet
{
    private $balance;
    private $walletID;

    public function getBalance()
    {
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

        $balanceQuery = "SELECT wallet_Balance from wallet WHERE wallet_ID= $this->walletID;";

        if($result = $link ->query($balanceQuery)){
            while ($fieldinfo  = $result ->fetch_field()){
                $curBal = $fieldinfo;
            }
            return $curBal;
        }
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getWalletID()
    {
        return $this->walletID;
    }
}