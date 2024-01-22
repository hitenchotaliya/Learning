<?php

class DestructTesting{

    public function __construct()
    {
        echo "Hello from constructor"."<br>";
    }
    public function Hello() {
        echo "Hello from Hello"."<br>";
    }

    //It will Autometically Destroy function after it work completion
    public function __destruct()
    {
        echo "Hello from destruct."."<br>";
    } 
}

$obj = new DestructTesting();
$obj->Hello();

//Real life Example

class ConnectionToDB{
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect("localhost","root","root","test");
    }
    public function InsertData() {
        echo "Insert data logic";
    }

    public function __destruct()
    {
     mysqli_close($this->conn);   
    }
}
