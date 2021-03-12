<?php


class Order
{
    public $gameList = array();
    public $inLibrary;

    //function takes a Game object, adds it to array on the next available index in the array
    public function addGame($game){
    $this->gameList[$this->gameList.length] = $game;
    }
}