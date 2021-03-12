<?php


class Game
{
    public $gameID;
    public $name;
    public $description;
    public $price;
    public $sale;
    public $filePath;

    public function getGameID(){
        return $this->gameID;
    }
}