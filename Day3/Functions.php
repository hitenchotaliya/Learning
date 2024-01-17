<?php

//     function SumOfMarks($studentArr){
//         $sum=0;
//         foreach($studentArr as $sm){
//             $sum+=$sm;
//         }
//         return $sum;
//     }

//     $hiten=[85,75,65,84,74,70];
//     $amit=[98,75,69,74,85,95];

//    $hitenTotal= SumOfMarks($hiten);
//    $amitTotal= SumOfMarks($amit);

//    echo "Hiten total mark out of 600 is $hitenTotal<br>";
//    echo "Amit total mark out of 600 is $amitTotal";

//     function AddNumber($num1,$num2){
//         $sum=$num1+$num2;
//         return $sum;
//     }

//    $result= AddNumber(10,20);
//     echo $result;

function IsValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $EmailToValidate = $_REQUEST['email'];
    if (IsValidEmail($EmailToValidate)) {
        echo "$EmailToValidate is valid email";
    } else {
        echo "$EmailToValidate is not valid email";
    }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>

<body>
    <form action="" method="post">
        Enter email:<input type="text" name="email">
        <button type="submit">Check</button>
    </form>
</body>

</html>