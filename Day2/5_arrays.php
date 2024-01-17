<?php

    $arr =array(1,"Red",2,"Green",3,4,5,6.0);
    $arr2=["one","two","thhree"];
    // echo "<pre>";
    // print_r($arr2);
    // echo "</pre>";

//Associative
    // $age=array(
    //     "A"=>15,
    //     "B"=>20,
    //     "C"=>25
    // );
    // $age["A"]=22;
    // print_r($age);
    // print($age["A"]);
    
//Multidimensional

$emp=[
    [1,"Krish","HR",20000],
    [2,"Mit","Emp",2000],
    [3,"Rit","Sp",200],
    [4,"Gir","Head",2],
    [5,"Jit","M",20],
];

// echo $emp[0][0]. " ";
// echo $emp[0][1]. " ";
// echo $emp[0][2]. " ";
// echo $emp[0][3]. " ";

// for ($row=0; $row<4; $row++){
//     for ($col=0; $col<4; $col++){
//         echo $emp[$row][$col]." ";
//     }
//     echo "<br>";
// }

foreach($emp as $v){
    foreach($v as $v1){
        echo $v1. " ";
    }
    echo "<br>";
}


// echo "<pre>";
// print_r($emp);
// echo "</pre>";

?>