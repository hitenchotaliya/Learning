<?php

$dsn = "mysql:host=localhost;dbname=mytestdb";
$dbusername="root";
$dbuserpassword="root";

try {
    $pdo = new PDO($dsn,$dbusername,$dbuserpassword);

    // if($pdo){
    //     echo "Connection successfully";
    // }
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}