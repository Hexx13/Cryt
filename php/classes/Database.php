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

    public function getLink(){
        $this->createLink();
        return $this->link;
    }


}