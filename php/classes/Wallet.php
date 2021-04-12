<?php
include_once "Database.php";
include_once "IDManager.php";
class Wallet
{
    private $balance;
    private $walletID;

    public function getBalance($walletID)
    {
        //make connection
        $db = new Database();
        $link = $db ->getLink();

        $balanceQuery = "SELECT wallet_Balance from wallet WHERE wallet_ID= $walletID;";

        $curBal = 0.00;

        if($result = $link ->query($balanceQuery)){


            while($row = $result->fetch_assoc()) {
                $curBal = $row["wallet_Balance"];
            }
            return $curBal;
        }
    }

    public function getWalletID($accountID)
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "select Wallet_wallet_ID from account where account_ID='$accountID'";

        if ($res = mysqli_query($link, $sql)){
            $arr = mysqli_fetch_array($res);
            return $arr["Wallet_wallet_ID"];
        }else{
            echo "ERROR: OH GOD OH NO WHY aaaaaaaaaaaaaaaaaaaaa $sql. "
                . mysqli_error($link);
        }
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

}