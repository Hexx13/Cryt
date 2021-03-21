<?php
//test
include "php/IDManager.php";
include "php/Account.php";

class Customer extends Account
{
    private $profilePicturePath;
    private $emailAddress;
    private $firstName;
    private $lastName;

    // figure out user session "session_start();"
    //https://www.tutorialrepublic.com/php-tutorial/php-sessions.php
    //https://www.php.net/manual/en/reserved.variables.session.php

    public function __construct($password, $username, $emailAddress, $firstName, $lastName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->emailAddress = $emailAddress;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function createAccountDB()
    {

        //make connection
        $link = mysqli_connect("localhost",
            "root",
            "password",
            "mydb");

        // Check connection
        if ($link === false) {
            die("CANNOT CONNECT OH NO OH NO"
                . mysqli_connect_error());
        }

        $manager = new IDManager();
        $id = $manager->generateID('account_ID', 'account');
        $walletID = $manager->generateID('wallet_ID', 'wallet');
        echo $id;
        $query = ("Insert into wallet Values($walletID, 0.00);");
        $query .= "INSERT INTO account VALUES ($id,0 , $this->username,$this->password,null ,$this->emailAddress,$this->firstName,$this->lastName, $walletID);";
        if ($link->multi_query($query)
            /*mysqli_query($link, $query*/) {
            echo "<h3>Data stored hopefully" . "check php my admin to be sure" . "</h3>";
            echo nl2br("\n$this->firstName\n $this->lastName\n"
                . "$this->emailAddress\n $this->username\n $id");
        } else {
            echo "ERROR: OH GOD OH NO WHY REEEEEEEEEEEEEE $query. "
                . mysqli_error($link);
        }
        //close connection
        mysqli_close($link);
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

    public function setWallet($wallet)
    {
        $this->wallet = $wallet;
    }

}