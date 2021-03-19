<?php

class IDManager
{
<<<<<<< HEAD

    public function generateID($primaryKey, $table){
=======
    public function getLastID($primaryKey, $table){
>>>>>>> 0fdbed07c25f37c4281534057bfa35e0c72dd583
        define ('dbuser', 'root');
        define ('dbpass', 'password');
        define('dbserver', 'localhost');
        define('dbname', 'mydb');
        //make connection
        $link = mysqli_connect(dbserver,
            dbuser,
            dbpass,
            dbname);
        //check connection
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        //echo"<mydb>";
        $LastID = $link->query("SELECT $primaryKey FROM $table ORDER BY account_ID DESC LIMIT 1");
        while($ID = $LastID->fetch_assoc()) {
            $id =  $ID["account_ID"];
        }

<<<<<<< HEAD


        return $id+1;
=======
        return $id;
>>>>>>> 0fdbed07c25f37c4281534057bfa35e0c72dd583
    }
    public function generateID($primaryKey, $table){
        $this->getLastID($primaryKey, $table);
    }

}