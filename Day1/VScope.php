<?php

    $x = 10;

    function test()
    {
        global $x;
        $x = 15;
        echo "X is inside the function: $x<br>";
    }
    test();
    echo "X is outside the function: $x<br>";
?>

<?php
    $y = 5;
    function myFunction()
    {
        global $y;
        $y = "10";
    }
    myFunction();
    echo "Hey" . $y;
?>
