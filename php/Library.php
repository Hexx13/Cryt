<?php


class Library
{

    public $gameList = array();
    public $inLibrary;
    public $playAdd;
    public $selectAdd;
    public $downloadAdd;

    //function takes a Game object, adds it to array on the next available index in the array
    public function addGameList($game)
    {
        $this->gameList[$this->gameList.length] = $game;
    }
    public function addToLibrary($gamelist){
        foreach ($gamelist as $game){
            // add game to database library of user
        }
    }
    public function getGameList(){}
}