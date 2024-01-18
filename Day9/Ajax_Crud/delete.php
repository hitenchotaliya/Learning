<?php
$id=$_POST['id'];
$conn = mysqli_connect("localhost", "root", "root", "test") or die("Connection failed");

$sql = "DELETE from demo where id = {$id}";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}