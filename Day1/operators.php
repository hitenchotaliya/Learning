<?php
//1.Arithmetic Operators
echo "Arithmetic<br><br>";
$a=10;
$b=10;

echo  "add".$a+ $b."<br>";
echo  "-  ".$a- $b."<br>";
echo  "/  ".$a/ $b."<br>";
echo  "*  ".$a* $b."<br>";
echo  "%  ".$a% $b."<br>";
echo  "**  ".$a** $b."<br>";

//2.Assignment Operators
echo "<br><br>Assignment";
$x=$a;
echo $x;

$a+= 10;
$a-= 10;
$a*= 10;
$a/= 10;

//3.Comparison Operators
echo "<br><br>Comparison<br><br>";

$big=10;
$small=8;
$eql=8;

echo "For big=small<br>";
echo var_dump($big == $small);
echo "<br>"

?>