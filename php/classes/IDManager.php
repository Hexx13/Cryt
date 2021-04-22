<?php


class IDManager
{
    public function getLastID($primaryKey, $table)
    {
        $id = 0;
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();


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