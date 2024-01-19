<?php

trait hello{
    public function  sayHello() {
        echo "Hello World"."<br>";
    }
    public function  sayHi() {
        echo "Hii World"."<br>";
    }
}

trait bye{
    public function  saybye() {
        echo "bye World"."<br>";
    }
}

class base{
    use hello , bye;
}

$test = new base();
$test->sayHello();
$test->saybye();
$test->sayHi();