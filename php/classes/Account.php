<?php


class Account
{
    protected $accountID;
    protected $username;
    protected $password;

    public function loginQuery($username, $password){
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "select * from account where account_username='$username'and account_Password='$password'";
        if ($res = mysqli_query($link, $sql)){
            return mysqli_fetch_array($res);
        }else{
            echo "ERROR: OH GOD OH NO WHY aaaaaaaaaaaaaaaaaaaaa $sql. "
                . mysqli_error($link);
        }

    }

    public function login($result){
        if ($result) {
            $_SESSION["login"] = "1";
            $_SESSION["username"] = "1";
            header("location:index.php");
        } else {
            header("location:login.php?err=1");
        }
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