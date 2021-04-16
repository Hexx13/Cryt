<?php
class Database
{
    private $link;
    public function createLink(){
        //make connection
        $link = mysqli_connect("localhost",
            "root",
            "password",
            "mydb");

        // Check connection
        if ($link === false) {
            die("CANNOT CONNECT OH NO OH NO"
                . mysqli_connect_error());
        }
        else{
            $this ->link = $link;
        }
    }

    public function fetchFromDb($table, $column, $userID){
        $link = $this->getLink();
        $sql = "select * from $column where account_ID = $userID";

        if ($res = mysqli_query($link, $sql)) {
            header("location:profile.php");

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }

    public function getLink(){
        $this->createLink();
        return $this->link;
    }
}