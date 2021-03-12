<?php


class Account
{
    public $profilePicturePath;
    public $accountID;
    public $username;
    public function setID($ID){
        $this->ID = $ID;
    }
    public function getID(){
        return $this->ID;
    }
}