<?php

class base{

    public $name;
    //no one can access it out of class only derived class can access it
    protected $age;
    //Out out class no one access
    private $salary;

    public function __construct($n,$a,$s)
    {
        $this->name =$n;
        $this->age =$a;
        $this->salary =$s;
    }

    public function show(){
        echo "<br>";
        echo "<b>Detail</b>"."<br>";
        echo "Your name: ".$this->name . "<br>";
        echo "Your Age: ".$this->age . "<br>";
        echo "Your Salary: ".$this->salary . "<br>";
    }
}


class derived extends base{

    public function get(){
        echo "Your name: ".$this->name . "<br>";
        echo "Your age: ".$this->age . "<br>";

        //Can not access salary here
        //echo "Your salary: ".$this->salary . "<br>";
    }
}



$base = new derived("Rahul bhai",25,25000);
$base1 = new base("Rahul bhai",25,25000);
//can not access out of class variable and method both
//$base -> name = "Bhai rahul";
//$base ->show();
$base ->get();
$base1 ->show();

