<?php

class IDManager
{

    private function generateID($primaryKey, $table){
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



        return $id;
    }



}