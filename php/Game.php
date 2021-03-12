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

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}