<?php

//Dates
echo "Date&Time: ". date('Y-d-h H-i-s'). "<br>";
echo "Time: ".time(). "<br>";
echo "Time: ".strtotime('next week'). "<br>";

//Maths
echo "Abs number: " .abs(-5). "<br>";
echo "Round 3 point: " .round(3.14159 ,3). "<br>";
echo "Rand between 1 to 15: ".rand(1,15). "<br>";

//Strings

echo "String Length: ".strlen("Hey, good morning"). "<br>";
echo "Replacing string: ".str_replace('World', 'PHP', 'Hello, World!'). "<br>";
echo "Sub string: " . substr("Hello World",0,4). "<br>";

//Array

$numarr = [1,2,3,4,5];
echo "Array number count: ".count($numarr). "<br>";
array_push($numarr,6);
echo "Array number count after push: ".count($numarr). "<br>";

//File content

$content = file_get_contents('example.txt');
echo $content;

$fname="example.txt";
$dataToAppend="this is from data append";
//file_put_contents("example.txt","Hello im puted text from code");
//file_put_contents($fname,$dataToAppend,FILE_APPEND);

$file="old_file.txt";

if(file_exists($file)){
    unlink('old_file.txt');
}
else{
    echo "</br>No file available";
}

?>