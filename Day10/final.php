<?php

class FatherClass{

    final function Show(){
        echo "This is ParentClass show method"."<br>";
    }
}

class SonClass  extends FatherClass{
    
    // Uncomment this and see that final method can not be overridden
    // function Show(){
    //     echo "Childshow Function";
    // }
}

$obj = new SonClass();
$obj->Show();
$obj->Show();