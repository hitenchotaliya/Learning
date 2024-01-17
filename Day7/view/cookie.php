<?php

    $name="Hiten";
    $password="1234";
    setcookie($name,$password,time()+86400,"/");
    if(isset($_COOKIE)){
    
        echo "Cookie is set<br>";
    }
    else{
        echo "Cookie is not set<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie in js</title>
</head>
<body>
    <h1>Cookie</h1>
    <script src="../js/cookie.js"></script>
</body>
</html>