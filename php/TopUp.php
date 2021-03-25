<?php


class TopUp
{
    public $amount;
   public $wallet_ID;
    public function __construct($amount, $wallet_ID)
    {
        $this->amount = $amount;
        $this->wallet_ID=$wallet_ID;
    }



    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

}