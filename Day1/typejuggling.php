<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Juggling</title>
</head>

<body>


    <?php
    $var = 100;
    $var1 = "100";
    //echo $var1 + $var1;
    ?>
    <?php
    $a = 100;
    $b = 200;
    $c = $a + $b;
   // var_dump($c);
    //echo $c;
    ?>
    <?php
    $var1 = 100;
    $var2 = "100 days";
   //    $var3 = $var1 + $var2;
   // var_dump($var3);
    ?>
    <?php
    $a=10;
    $b=(boolean)$a;
    $c=(string)$a;
    $d=(array)$a;
    $e=(object)$a;
   // var_dump($a,$b,$c,$d,$e)
    ?>

    <?php
    
    $x = 5;
    $x = (string) $x;
    var_dump($x);

    ?>
</body>

</html>