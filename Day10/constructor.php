<?php

class Person{
    public $name,$age;

    // if you want to set default value you can set here
    function __construct($n="No name",$a=0)
    {
     $this->name =$n;
     $this->age=$a;   
    }

    function show(){
        echo "Your name is ".$this->name." and age is ".$this->age."<br>";
    }

}

$person1 = new Person("Hiten",5);
//and when you dont send any value then it will show default value; 
//If default value is not set then show error
$person2 = new Person();

$person1->show();
$person2->show();