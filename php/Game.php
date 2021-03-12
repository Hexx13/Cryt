<?php


class Game
{
    private $gameID;
    private $name;
    private $description;
    private $price;
    private $sale;
    private $filePath;

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
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getSale()
    {
        return $this->sale;
    }
    public function setSale($sale)
    {
        $this->sale = $sale;
    }
    public function getFilePath()
    {
        return $this->filePath;
    }
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }
}