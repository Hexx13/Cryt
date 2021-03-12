<?php


class Account
{
    public $picture;
    public $ID;
    public $username;
    public function setID($ID){
        $this->ID = $ID;
    }
    public function getID(){
        return $this->ID;
    }
}