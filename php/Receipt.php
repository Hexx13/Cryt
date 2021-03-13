<?php


class Receipt
{
    public $details = array();

    public function getDetails()
    {
        return $this->details;
    }
    function __construct($customer, $transaction)
    {
        $this->$customer;
        $this->$transaction;
    }
    public function print_receipt(){

    }
}