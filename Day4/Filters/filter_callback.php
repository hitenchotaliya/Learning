<?php

function replaceStr($str)
{
    return str_replace(" ", "_", $str);
}
$my_var = "Testing filter ";

$result = filter_var($my_var, FILTER_CALLBACK, array(
    'options' => 'replaceStr'
));
print_r($result);
//var_dump($result);
?>