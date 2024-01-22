<?php

class TestingSetAndGet{

    private $name;
    private $age;
    public function  PrintValue() {
        echo $this->name;
    }

    public function __get($property)
    {
        echo "You are trying to access non-existing or private property($property)";
    }

    public function __set($property, $value)
    {
      if(property_exists($this,$property)){
        $this->$property = $value;
      }else{
        echo "Property does not exist: ($property)";
      }
    }
}

$obj = new TestingSetAndGet();
$obj->age = 15;
// $obj->PrintValue();