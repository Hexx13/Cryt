<?php
include_once "Database.php";
include_once "IDManager.php";
class Wallet
{
    private $balance;
    private $walletID;

    public function getBalance($walletID)
    {
        //make connection
        $db = new Database();
        $link = $db ->getLink();

        $balanceQuery = "SELECT wallet_Balance from wallet WHERE wallet_ID= $walletID;";

        $curBal = 0.00;

        if($result = $link ->query($balanceQuery)){


            while($row = $result->fetch_assoc()) {
                $curBal = $row["wallet_Balance"];
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