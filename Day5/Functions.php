<?php
//Logical
$sql = "SELECT payment_amount,
     IF(payment_amount > 100, 'Greater than 100', 'Less than or Equal 100')
      FROM payments";
$sql = "SELECT payment_amount,
        CASE 
               WHEN payment_amount > 100 THEN 'Greater'
                ELSE 'Less or Equal'
        END 
        FROM payments;";

$sql = "SELECT * FROM payments 
        WHERE payment_amount > 100 AND payment_amount < 200";

$sql = "SELECT * FROM payments
        WHERE payment_amount BETWEEN 100 AND 200
        HAVING payment_mode='Cash'";
