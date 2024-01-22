<?php

abstract class parentClass{

    public $name;
    // abstract just have abstract method declaration
    abstract protected function calc($a,$b);

}

class ChildClass extends parentClass{

    public function calc($c,$d){
        echo $c+$d;
    }
}

$test = new ChildClass();
$test->calc(5,10);