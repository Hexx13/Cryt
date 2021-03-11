<?php


class Store
{
    public function addGame($game){
        $this->gameList[$this->gameList.length] = $game;
    }
}