<?php

class Employee{

    public $name,$age,$salary;

    function __construct($n,$a,$s)
    {
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
   

    function ShowInfo() {
       echo "Employee Details"."<br>"; 
       echo "Name: ".$this->name."<br>"; 
       echo "Age: ".$this->age."<br>"; 
       echo "Salary: ".$this->salary."<br>"; 
    }
}

class Manager extends Employee{
    public $travelling = 1000;
    public $phone = 300;
    public $totalSalary;

   

    function info() {
        $this->totalSalary = $this->travelling + $this->phone + $this->salary;
        echo "<br>Manager Details"."<br>"; 
        echo "Name: ".$this->name."<br>"; 
        echo "Age: ".$this->age."<br>"; 
        echo "Salary: ". $this->totalSalary."<br>"; 
     }

}

$employee1 = new Employee("Rakesh",25,25000);
$employee2 = new Manager("kesh",25,2000);

$employee1->ShowInfo();
$employee2->info();



?>