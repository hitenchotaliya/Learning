<?php
// if(!file_exists("hello.txt")){
//     die( "File is not available");
// }else{
//     echo readfile("hello.txt");
// }

//Custome

// function myfunction(
//     int $type,
//     string $msg,
//     ?string $file = null,
//     ?int $line = null
// ) {
//     echo "<br>" . $type;
//     echo "<br>" . $line;
//     echo  "<br>" . $msg;
//     echo  "<br>" . $file;

//     exit;
// }

// error_reporting(E_ALL & ~E_WARNING);
// set_error_handler('myfunction', E_ALL);

// echo $x;

error_reporting(E_ALL);
ini_set("display_errors",0);
function MyErrorHandler($errno,$errstr,$errfile,$errline){

    $message="Erro: [$errno] $errstr - $errfile:$errline";
    error_log($message . PHP_EOL, 3,"errorlog.txt");
}

set_error_handler("MyErrorHandler");

echo $a
?>