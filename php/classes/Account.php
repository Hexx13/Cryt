<?php


class Account
{
    protected $accountID;
    protected $username;
    protected $password;

    public function loginAccount($username, $password){

    }

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
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
}