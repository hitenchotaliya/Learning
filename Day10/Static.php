<?php

class base{

    public static $name="Hello World!"."<br>";

    public static function show(){
        echo self::$name;
    }

    public function __construct($n)
    {
        //this will override oringal name 
        self::$name=$n;
       // self::show();
    }
}

class derived extends base{
    public static function show() {

        //use parent keyword for accessing parent member variable
        echo parent::$name;
    }
}

//direct call the member and function.without using instance/object
// echo base::$name;
// echo base::show();

//using constructor
$test = new base("wow");
$test->show();

$t=new derived("Hey");
$t->show();