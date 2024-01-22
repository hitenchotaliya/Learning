<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

$conn = new mysqli($servername ,$username,$password ,$dbname );

if($conn->connect_error){
    die("Connection faild:". $conn->connect_error);
}

$sql ="SELECT * FROM demo";
$result=$conn->query($sql);

$count =0;
if($result->num_rows>0){

    // while($row = $result->fetch_assoc()){
    //     echo "Name: ".$row['fname']." ".$row['lname']."<br>";
    // }
    // Assuming $result is a MySQLi result object
for ($row = $result->fetch_assoc(); $row !== null; $row = $result->fetch_assoc()) {
   $count++;
    
    echo  $count .". "."Name: " . $row['fname'] . " " . $row['lname'] . "<br>";
}

    
}
$conn->close();