<?php

$arr= array(
    "stname"=>"<h1>hietn</h1>",
    "stmarks"=>95,
    "stemail"=>"h@  gmail.com"
);
$filters= array(
    "stname" => FILTER_SANITIZE_STRING,
    "stmarks"=> array(
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
        ),
        "stemail"=>FILTER_SANITIZE_EMAIL

);
echo "<pre>";
print_r(filter_var_array($arr,$filters));
echo "</pre>";