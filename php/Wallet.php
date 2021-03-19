<?php

include "IDManager.php";
class Wallet
{
    private $balance;
    private $walletID;

    public function getBalance()
    {
        return $this->balance;
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