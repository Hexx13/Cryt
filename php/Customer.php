<?php


class Customer
{
    public $emailAdd;
    public $nameAdd;
    public $passwordAdd;

    public function setEmailAdd($emailAdd) {
        $this->emailAdd = $emailAdd;
    }
    public function getEmailAdd(){
        return $this->emailAdd;
    }

    public function setNameAdd($nameAdd) {
        $this->nameAdd = $nameAdd;
    }
    public function getNameAdd(){
        return $this->nameAdd;
    }

    public function setPasswordAdd($passwordAdd) {
        $this->passwordAdd = $passwordAdd;
    }
    public function getPasswordAdd(){
        return $this->passwordAdd;
    }

    public function setPicAdd($picAdd) {
        $this->picAdd = $picAdd;
    }
    public function getPicAdd(){
        return $this->picAdd;
    }

    public function displayStuff(){
        echo "E-mail" . $this->getEmailAdd();
        echo "Name" . $this->getNameAdd();
        echo "Password" . $this->getPasswordAdd();
        echo "Profile Picture" . $this->getPicAdd();
    }
}