<?php


if($_SERVER["REQUEST_METHOD"]=="GET")
{
    if(isset($_REQUEST['name']) &&  isset($_REQUEST['age'])){
    $name= $_REQUEST['name'];
    $age= $_REQUEST['age'];

    echo " You entered name is $name and age $age";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Your name: <input type="text" name="name"></br>
        Age: <input type="number" name="age"></br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>