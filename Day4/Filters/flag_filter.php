<?php
$var = "4.2";

$var = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);

if(filter_var($var,FILTER_VALIDATE_FLOAT)){
    echo "<br>$var is valid Float";
}else{
    echo "<br>$var is not valid Float";
}
