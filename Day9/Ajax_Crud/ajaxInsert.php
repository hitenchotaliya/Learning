<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$conn = mysqli_connect("localhost", "root", "root", "test") or die("Connection failed");

$sql="insert into demo(fname,lname) values('{$first_name}','{$last_name}')";
// $result = mysqli_query($conn, $sql) or die("SQL Failed");
// $output = "";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo "Error";
}