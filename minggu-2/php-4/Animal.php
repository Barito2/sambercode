<?php

class Animal {
    public $legs= 2;
    public $cold_blooded = "false";
    public $name;
    
    public function __construct($name) 
    {
        $this->name= $name;
    }

    // public function get_legs()
    // {
    //     echo $this->legs;
    // }

}

class Ape extends Animal{
    public function yell()
    {
        echo "Auooo";
    }
}

class Frog extends Animal{
    public function jump()
    {
        echo "hop hop";
    }
}


