<?php


class Store
{

    public function getAllGamesTable(){
        include_once "php/classes/Database.php";
        $db = new Database();
        $link = $db->getLink();
    }

    public function addGame($game){
        $this->gameList[$this->gameList.length] = $game;
    }
}