<?php

class Calculation{
    public $a,$b,$c;

    function sum() {
        $this ->c = $this ->a + $this ->b;
        return $this->c;
    }
    function sub() {
        $this ->c = $this ->a - $this ->b;
        return $this->c;
    }
}

    $c1= new Calculation();
    $c1->a=10;
    $c1->b=20;

    $c2= new Calculation();
    $c2->a=110;
    $c2->b=20;

    echo "Sum of c1 is: ".$c1->sum()."<br>";
    echo "Sub of c1 is: ".$c1->sub();

?>