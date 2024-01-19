<?php

interface parentOne{

    //Can not create member variable in interface 
    //protected $a;
    //only methods are accepr here

    //You cant use private or protected it must be public
   public function calc($a,$b);
}

interface parentTwo{
    function sub($c,$d);
}

class childClass implements parentOne,parentTwo{
    public function calc($a, $b)
    {
        echo $a+$b."<br>";
    }
   
    public function sub($a, $b)
    {
        echo $a-$b."<br>";
    }
}

$obj = new childClass();

$obj->calc(10,20);
$obj->sub(10,20);
