<?php

class hello{
    public function SayHello() {
        echo "Hello Everyone";
    }
}

class bye{
    public function SayBye() {
        echo "Bye Everyone";
    }
}

function wow(hello $c){
    $c->SayHello();
}

//setting up hello type. so if you you bye class you can access it. 
//It will show error before goind inside of function
// $t= new bye();
$t= new hello();
wow($t);



//Student example

class School{
    public function getNames(Studnets $names) {
        echo "<ul>";
        foreach($names->Names() as $name){
            echo "<li>". $name . "</li>";
        }
        echo "<ul>";
    }
}

class Studnets{
    public function Names() {
        return ["Jivan","Maran","Jagmal","Kashyap","Route"];
    }
}

class Library{

}

$lib = new Library();
$stu = new Studnets();
$sch = new School();

//You cant pass $lib or $sty here because we type restrict it
$sch->getNames($stu);