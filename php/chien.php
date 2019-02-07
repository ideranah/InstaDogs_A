<?php

class Dog {
    private $id;
    private $userId;
    private $age;
    private $dogName;
    private $nickname;
    private $gender;
    private $breed;
    private $crossed;
    private $profilePic;
    private $article;

    public function getDogId() {
        return $this->id;
    }
    public function getDogName() {
        return $this->dogName;
    }


    /**
     * Get the value of profilePic
     */ 
    public function getProfilePic()
    {
        return $this->profilePic;
    }
}

?>