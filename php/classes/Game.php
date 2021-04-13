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


    public function getGameArray()
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "select * from game";

        if ($res = mysqli_query($link, $sql)) {
            return mysqli_fetch_all($res, $mode = MYSQLI_ASSOC);

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }

    public function getGame($gameID)
    {
        //make connection
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();

        $sql = "select * from game where game_ID  = $gameID";

        if ($res = mysqli_query($link, $sql)) {
            return mysqli_fetch_assoc($res);

        } else {
            echo "ERROR: OH JOD OH NO WHY XAXAXAXAXXAXAXA $sql ." . mysqli_error($link);
        }
    }
}
