<?php
//test
include_once "IDManager.php";
include_once "Database.php";

class Customer
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


    public function changeDetails($column,$userID,$value )
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "UPDATE account set $column = $value where user_ID = $userID ";

        if ($res = mysqli_query($link, $sql)) {
            header("location:profile.php");

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }

    public function createAccountDB()
    {
        $manager = new IDManager();


        //generate ids
        $id = $manager->generateID('account_ID', 'account');
        $walletID = $manager->generateID('wallet_ID', 'wallet');

        //make connection
        $database = new Database();
        $link = $database->getLink();

        //Insert queries
        $query = "Insert into wallet Values($walletID, 0.00);";
        $query2 = "INSERT INTO account VALUES ($id,0,'$this->username','$this->password',null,'$this->emailAddress','$this->firstName','$this->lastName',$walletID);";


        //Mysqli query connection
        if (mysqli_query($link, $query)) {

            // Second query
            if (mysqli_query($link, $query2)) {

                //if it works this happens
                echo "<h3>Data stored hopefully\n" . "check php my admin to be sure" . "</h3>";
                echo nl2br("\n$this->firstName\n $this->lastName\n"
                    . "$this->emailAddress\n $this->username\n $id");

                //if the second doesnt work this happens
            } else {
                echo "ERROR: OH GOD OH NO WHY aaaaaaaaaaaaaaaaaaaaa $query2. "
                    . mysqli_error($link);
            }
            //if the first query doesnt work
        } else {
            echo "ERROR: OH GOD OH NO WHY REEEEEEEEEEEEEE $query. "
                . mysqli_error($link);
        }
        //close connection
        mysqli_close($link);
    }


}