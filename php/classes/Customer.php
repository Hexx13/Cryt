<?php
//test
include_once "IDManager.php";
include_once "Database.php";

class Customer
{
    private $username;

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setAll($password, $username, $emailAddress, $firstName, $lastName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->emailAddress = $emailAddress;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    private $password;
    private $emailAddress;
    private $firstName;
    private $lastName;


    public function __construct()
    {

    }


    public function changeDetails($column, $userID, $value)
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "UPDATE account set $column = '$value' where account_ID = $userID";

        if ($res = mysqli_query($link, $sql)) {
            header("location:profile.php");

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }

    public function checkNull($userID)
    {
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "select isnull(profile_Picture_Path ) from account where account_ID = $userID ";

        if ($res = mysqli_query($link, $sql)) {
            $picArray = mysqli_fetch_assoc($res);
            if ($picArray['profile_Picture_Path'] = 0) {
                return true;
            } else {
                return false;
            }

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }

    public function getPicPath($userID)
    {

        if (!$this->checkNull($userID)) {
            include_once "php/classes/Database.php";
            $db = new Database();
            $link = $db->getLink();

            $sql = "select profile_Picture_Path from account where account_ID = $userID";
            if ($res = mysqli_query($link, $sql)) {
                $picArray = mysqli_fetch_assoc($res);
                echo $picArray['profile_Picture_Path'];

            } else {
                echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
            }
        }
        else{
            echo "img/default_pfp.png";
        }
    }

    public function changePic($picPath, $userID)
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "update account set profile_Picture_Path = '$picPath' where account_ID = $userID ";

        if ($res = mysqli_query($link, $sql)) {
            header("location:profile.php");

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }

    public function getAccountDetails($accountID)
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "select * from account where account_ID = $accountID";

        if ($res = mysqli_query($link, $sql)) {
            return mysqli_fetch_assoc($res);

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