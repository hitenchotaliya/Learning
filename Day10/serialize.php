<?php

// echo serialize(true);
// echo serialize(1);
// echo serialize(2.5);
// echo serialize("Hello");
// echo serialize([1,2,3]);
// echo serialize(["name"=>1, "val"=>2]);

// var_dump (unserialize(serialize(["name"=>1, "val"=>2])));

class SerializeObject{

    public $name;
    public $age;

    public function setValue($n,$a){
        $this->name = $n;
        $this->age = $a;
    }

    public function __sleep()
    {
        return array("name");
    }

    public function __wakeup()
    {
        echo "This is wakeup method"."<br>";
    }
}

$obj= new SerializeObject();
$obj->setValue("Hiten" ,25);

$SerializeValue = serialize($obj);
$UnserializeValue = unserialize($SerializeValue);

echo $SerializeValue;
echo "<br>";
print_r($UnserializeValue) ;