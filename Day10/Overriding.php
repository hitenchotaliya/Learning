<?php

class emp{
    public $name="Parent";

   public function calc($a,$b)
    {
        return $a+$b;
    }
}

class manager extends emp{

    public $name="Child";

    public function calc($a,$b) {
        return $a-$b;
    }
}

$test1 = new emp();
echo $test1->calc(1,2)."<br>";

$test = new manager();
echo $test->calc(1,2);


?>