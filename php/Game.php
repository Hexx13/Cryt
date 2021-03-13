<?php

$doomer = new Game();

$doomer->setPrice(10.00);
$doomer->setSale(70);
echo $doomer->calcCurrentPrice();

class Game
{

    private $gameID;
    private $name;
    private $description;
    private $orginalPrice;
    private $sale;
    private $filePath;

    public function calcCurrentPrice(){
        $discount = ($this->orginalPrice/100) * $this->sale;
        return ($this->orginalPrice - $discount);
    }

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
        return $this->orginalPrice;
    }
    public function setPrice($price)
    {
        $this->orginalPrice = $price;
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
