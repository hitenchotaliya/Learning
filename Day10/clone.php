<?php

class Students{
     
    public $name;
    public $course;

   public function __construct ($n){
    $this->name = $n;
   }
   public function SetCourse(Course $c) {
    $this->course = $c;
   }
   public function __clone()
   {
    $this -> course = clone $this -> course;
   }
}

class Course{
    public $CourseName;

    public function __construct($cn)
    {
      $this ->CourseName = $cn;  
    } 
}

$Student1 = new Students("Hiten");
$Course1 = new Course("PHP");

$Student1->SetCourse($Course1);

$Student2 = clone $Student1;

$Student2->name = "Chirag";
$Student2->course->CourseName=".Net";

echo "<pre>";
print_r($Student1);
echo "</pre>";
echo "<pre>";
print_r($Student2);
echo "</pre>";