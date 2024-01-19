<?php
// Allow only int val
function sum(int $v){
    $sum = $v+1;
    echo $sum."<br>";
}

sum("10");

//Only array are allow
function fruits(array $names){
    foreach($names as $name){
        echo $name. "<br>";
    }
}

$fruits =["Apple","Orange","Banana"];

fruits($fruits);
