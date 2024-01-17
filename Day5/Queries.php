<?php

include 'dbc-inc.php';

$sql="select * from reg";
$orderby ="select payment_mode,Sum(payment_amount) as Total
from payments
GROUP by payment_mode
ORDER BY Total DESC";


$having="select payment_mode,COUNT(payment_amount) as Total
from payments
GROUP by payment_mode
HAVING count(payment_amount) >=5 AND count(payment_amount) <=5
ORDER BY Total Desc";


try {
        $stmt=$pdo->prepare($having);   
        $stmt->execute();
       while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
       }
} catch (PDOException $e) {
   echo "Error: ".$e->getMessage();
}
