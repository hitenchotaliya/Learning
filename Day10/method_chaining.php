<?php

class MultiFunC{

    public  function first() {
        echo "Hello from first"."<br>";
        return $this;
    }
    public  function second() {
        echo "Hello from second"."<br>";
        return $this;
    }
    public  function third() {
        echo "Hello from third"."<br>";
        return $this;
    }
}

$test=new MultiFunC();
//Normal calling
// $test->first();
// $test->second();
// $test->third();

//Method Chaining Remember that we need to return $this in every end of function 
$test->first()->second()->third();