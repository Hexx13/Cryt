<?php


class Store
{

    public function getAllGamesTable(){

    }

    public function addGame($game){
        $this->gameList[$this->gameList.length] = $game;
    }
}