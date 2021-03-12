<?php
//test

class Customer extends Account
{
    private $profilePicturePath;
    private $emailAddress;
    private $firstName;
    private $lastName;
    private $wallet;
    public function getProfilePicturePath()
    {
        return $this->profilePicturePath;
    }
    public function setProfilePicturePath($profilePicturePath)
    {
        $this->profilePicturePath = $profilePicturePath;
    }
}