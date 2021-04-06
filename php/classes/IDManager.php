<?php


class IDManager
{
    public function getLastID($primaryKey, $table)
    {
        $id = 0;
        //make connection
        $link = mysqli_connect("localhost",
            "root",
            "password",
            "mydb");
        //check connection
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        //echo"<mydb>";
        $LastID = $link->query("SELECT $primaryKey FROM $table ORDER BY $primaryKey DESC LIMIT 1");
        while ($ID = $LastID->fetch_assoc()) {
            $id = $ID[$primaryKey];
        }

        return $id;
    }

    public function generateID($primaryKey, $table)
    {
        return $this->getLastID($primaryKey, $table) + 1;
    }
}