<?php

include './db.php';

$ConnObj = new Database();

$join = "city ON demo.cid = city.cid";
$ColumToShow = "demo.id,demo.fname,demo.lname,city.name";
$limit='3';

//INSERT
// $ConnObj->Insert('demo',["fname"=>"Rakesh","lname"=>"Kir"]);
// echo "Insert result is: ";
// print_r($ConnObj->GetResult());

//UPDATE
// $ConnObj->Update('demo',["fname"=>"Milan","lname"=>"Patel"],'id="19"');
// echo "Update result is: ";
// print_r($ConnObj->GetResult());

//Delete
// $ConnObj->Delete('demo','id="20"');
// echo "Update result is: ";
// print_r($ConnObj->GetResult()); 

//SQL Select
// $ConnObj->sql('SELECT * FROM demo');
// // $ConnObj->sql('SELECT * FROM demo WHERE fname = "Mitesh"');
// echo "SQL result is: ";
// echo "<pre>";
// print_r($ConnObj->GetResult()); 

//Select dynamic
// $ConnObj->Select('demo','fname',null,'fname LIKE "%a%"','fname','5');
// $ConnObj->Select('demo','*',$join,null,null,'2');
$ConnObj->Select('demo', $ColumToShow, $join, null, null, $limit);
echo "<br>Select result is: ";
echo "<pre>";
print_r($ConnObj->GetResult());

//Pagination
echo $ConnObj->Pagination('demo', $join, null, $limit);
