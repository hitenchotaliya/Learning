<?php

include 'dbc-inc.php';



// $name="a";

// //$sql=$pdo->prepare("select * from reg where username = ?");
// $sql=$pdo->prepare("select * from reg where username = :name");

// //$sql->bindParam(1,$name,PDO::PARAM_STR);

// $sql->execute(array(':name'=>$name));

// $result=$sql->fetchAll(PDO::FETCH_ASSOC);

// if(count($result)){
//     foreach($result as $row){
//         echo "Name: ". $row['username']."<br>";
//     }
// }else{
//     echo "No record found";
// }




// $sql="select * from reg";
// $result = $pdo->query($sql);




// while($row= $result->fetch(PDO::FETCH_ASSOC)){
//     echo $row['username']."<br>";
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
// }


$uname="F";
$email="f@gmail.com";
$psw="7845";

$sql="insert into `reg` (`username`,`email`,`psw`) values (:name,:email,:psw)";

try {
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(':name',$uname);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':psw',$psw);
    $stmt->execute();

    echo "Successfully inserted";
} catch (PDOException $e ) {

    echo "Error: ".$e->getMessage();
    
}
