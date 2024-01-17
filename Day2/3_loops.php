<?php

//While
// $i=0;
// while($i<5){
//    // $i=$i+1; //odd

//     echo $i+1;
//     echo"<br>";
//     $i++;
// }
// $odd = "";
// $even = "";
// $i = 1;
// while ($i <= 20) {
//     if ($i % 2 == 0) {
//         $even = $even . " " . $i;
//     } else {
//         $odd = $odd . " " . $i;
//     }
//     $i++;
// }
// echo "Even number is :" . $even . "<br>";
// echo "odd number is :" . $odd . "<br>";

//For loop

// for($a=1;$a<=5;$a++){
//     echo $a;
//     echo"<br>";
// }


//Do-While loop
// $i=100;
// do{
//     echo "Welcome here"."<br>";
//     $i++;
// }while($i<5);


//For-Each Lop
// $arr =array("One","Two","Three","Four","Five");
// foreach ( $arr as $value) {
//     echo $value."<br>";
// }

//Break statement 

// for ($i=1; $i <=5; $i++) { 
//    echo $i."<br>";
//     if($i==3)break;
// }

//Continue

// for ($i=1; $i < 10; $i++) { 
  //  if($i==3)continue;
//    echo $i."<br>";
   
// }

$num = array(1,2,3,4,5);
foreach($num as $values){
    if($values==3)continue;
    echo $values."<br>";
  
}




?>