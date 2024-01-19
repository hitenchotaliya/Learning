<?php

class base{
    protected static $name="Hello";

    public function show() {
        echo static::$name;
        echo self::$name;
    }
}

class derived extends base{
    protected static $name="World";
}

//so when we change value in child then it will still show value of parent so solving this
//we need to use static instead of self  echo static::$name;
$test = new derived();
$test->show();