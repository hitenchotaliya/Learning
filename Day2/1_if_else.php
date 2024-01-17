<?php

// $a=10;
// $b=8;

// if($a > 78){
//     echo "$a is greater then 78";
// }
// else{
//     echo "$a is not greater then 78";
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_REQUEST['age'];
    if ($age <= 0) {
        echo "Please enter valid age";
    } elseif ($age <= 12) {
        echo "You are a child";
    } elseif ($age <= 19) {
        echo "You are teenage";
    } elseif ($age <= 40) {
        echo "You are an adult";
    } else {
        echo "You are senior citizen";
    }
}

// $driver=65;
// if($driver > 25 && $driver < 65){
//     echo "You are allow to drive";
// }
// else{
//     echo "You not allow to drive ";
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else</title>
</head>

<body>
    <form action="" method="post">
        Enter your age:<input type="text" name="age">
        <button type="submit">submit</button>
    </form>
</body>

</html>