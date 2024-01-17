<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $Hello ="Hello world!";
        $H="Hello from script tag!";
    ?>
    <h1><?php
    echo $Hello;
    ?></h1>
    <?php
    #Comment
    //comment

    print <<<END
    This uses the "here document" syntax to output
   multiple lines with  interpolation. Note
   that the here document terminator must appear on a
   line with just a semicolon no extra whitespace!<br>
   END; 

   print "<br>Hello
   World
   iam Here";
    

   $fours = 2 + 2;
//   $four <tab>=<tab2<tab>+<tab> 2;
    $four = 2
    +
    5
    ;
    echo $fours;
    ?>
    <?php
    
    $int = 51;
    $int1=-51;
    $sum = $int+$int1;
    echo $sum;

    ?>

    

</body>
</html>