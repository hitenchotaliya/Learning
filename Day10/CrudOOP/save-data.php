<?php

include './db.php';
$obj = new Database();

// print_r($_POST);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cname=$_POST['cname'];

$values= ["fname"=>$fname,"lname"=>$lname,"cid"=>$cname];

if($obj->Insert("demo",$values)){
    header("Location: show-data.php");
    echo "<h1>Data Inserted.</h2>";
}else{
    echo "<h1>Data not inserted.</h2>";
}
?>