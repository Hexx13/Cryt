<?php
//test
include "IDManager.php";
include "Account.php";
class Customer extends Account
{
    private $profilePicturePath;
    private $emailAddress;
    private $firstName;
    private $lastName;
    private $wallet;


    // figure out user session "session_start();"
    //https://www.tutorialrepublic.com/php-tutorial/php-sessions.php
    //https://www.php.net/manual/en/reserved.variables.session.php

    public function createAccountDB(){
        define ('dbuser', 'root');
        define ('dbpass', 'password');
        define('dbserver', 'localhost');
        define('dbname', 'mydb');
        //make connection
        $link = mysqli_connect(dbserver,
            dbuser,
            dbpass,
            dbname);

        // Check connection
        if($link === false){
            die("CANNOT CONNECT OH NO OH NO"
                . mysqli_connect_error());
        }


        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $emailAddress = $_REQUEST['email'];
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];

        $manager=new IDManager();
        $id = $manager ->generateID('account_ID', 'account');

        $query = "Insert into wallet Values($manager ->generateID('wallet_ID', 'wallet'), 0.00);
                  Insert into account Values ($username,$password ,null,$emailAddress,$firstName,$lastName,$id)";

        if(mysqli_query($link, $query)){
            echo "<h3>Data stored hopefully"."check php my admin to be sure"."</h3>";
            echo nl2br("\n$firstName\n $lastName\n"
                . "$emailAddress\n $username\n $id");
        } else{
            echo "ERROR: OH GOD OH NO WHY REEEEEEEEEEEEEE $query. "
                . mysqli_error($link);
        }
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
    public function getWallet()
    {
        return $this->wallet;
    }
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;
    }


}