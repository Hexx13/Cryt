<?php
//test

class Customer extends Account
{
    private $profilePicturePath;
    private $emailAddress;
    private $firstName;
    private $lastName;
    private $wallet;


    public function createAccountDB($firstName, $lastName, $emailAddress, $password, $username){
        define ('dbuser', 'root');
        define ('dbpass', 'password');
        define('dbserver', 'localhost');
        define('dbname', 'mydb');
//make connection
        $link = mysqli_connect(dbserver,
            dbuser,
            dbpass,
            dbname);

        $sql = "Insert into game Values ($name,$pass,null,$email,$firstname,$lastname,$ID+1)";
    }


    public $setProfilePicture;

    public function getProfilePicturePath()
    {
        return $this->profilePicturePath;
    }
    public function setProfilePicturePath($profilePicturePath)
    {
        $this->profilePicturePath = $profilePicturePath;
    }
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getWallet()
    {
        return $this->wallet;
    }
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;
    }


}