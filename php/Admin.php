<?php


class Admin extends Account
{
    private $isAdmin;
    public function getAdmin()
    {
        return $this->isAdmin;
    }
    public function setAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }
}