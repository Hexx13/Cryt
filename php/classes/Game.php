<?php


class Game
{

    private $gameID;
    private $Name;
    private $description;
    private $orginalPrice;
    private $sale;
    private $filePath;

    public function calcCurrentPrice()
    {
        $discount = ($this->orginalPrice / 100) * $this->sale;
        return ($this->orginalPrice - $discount);
    }


    public function getGameArray($accountID)
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "select * from game";

        if ($res = mysqli_query($link, $sql)) {
            return mysqli_fetch_array($res);

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }

}
