<?php
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$conn = mysqli_connect("localhost", "root", "root", "test") or die("Connection failed");

$sql = "UPDATE demo SET fname = '{$fname}' , lname ='{$lname}' WHERE id='{$id}' ";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}