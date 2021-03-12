<?php


class Account
{
    private $accountID;
    private $username;
    private $password;

    public function getAccountID()
    {
        return $this->accountID;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
}