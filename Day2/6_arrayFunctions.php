<?php

$arr = array(5,7,"Hi","Bye",3,1,2,2);
// sort($arr);
// print_r($arr);
// rsort($arr);
// print_r($arr);
// krsort($arr);
// print_r($arr);
// arsort($arr);
// print_r($arr);
// krsort($arr);
// print_r($arr);

$a=$arr;
print_r(array_count_values($a));
// if(in_array("1",$arr,true)){
//     echo "Find successfully";
// }else{
//     echo "Can't Find"."<br>";
// }
// echo array_search(1,$arr);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";



// $num=[1,2,3,4,5];
// $word=["One","Two","Three","Four","Five"];

// $new= array_replace ($num,$word);

// echo "<pre>";
// print_r($new);
// echo "</pre>";

// $a1=array("a"=>array("apple"),"b"=>array("Red"));
// $a2=array("1"=>array("one"),"2"=>("two"));

// $newArray = array_replace_recursive($a1,$a2);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


//Push POP Array

// $color=["Red","Green","Black"];

// //array_pop($color);
// array_push($color,"White");

// echo "<pre>";
// print_r($color);
// echo "</pre>";


//*********Merge and combine

// $fruit=["a"=> "Apple","b"=> "banana", "c"=> "Cherry"];
// $veg=["b"=>['color'=> ["red","black","sky"]],"carrot"];
// $color =["Green"];
// $merge=array_merge($fruit,$veg,$color);
// $merge1=array_merge_recursive($fruit,$veg,$color);
// echo "<pre>";
// print_r($merge1);
// echo "</pre>";

// $name=["A","B","C"];
// $age=[25,32,12];

// $na=array_combine($name,$age);
// echo "<pre>";
// print_r($na);
// echo "</pre>";
?>