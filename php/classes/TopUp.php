<?php
include_once "Wallet.php";

class TopUp extends Wallet
{
    public function topUpWallet($amountToAdd, $id){
        $curBal = $this->getBalance($id);
        $newAmount = $amountToAdd + $curBal;

        //make connection
        $databasetop = new Database();
        $link = $databasetop ->getLink();

        $query = "UPDATE Wallet SET wallet_Balance=$newAmount WHERE wallet_ID=$id";

        if (mysqli_query($link, $query)) {
            echo "<h3>Data stored hopefully\n" . "check php my admin to be sure" . "</h3>";
            echo nl2br("Amount topped up to id:$id is $newAmount");

            //if the second doesnt work this happens
        } else {
            echo "ERROR: OH GOD OH NO WHY aaaaaaaaaaaaaaaaaaaaa $query. "
                . mysqli_error($link);
        }
    }

}