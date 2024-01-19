<?php

require './first.php';
require './second.php';

//Another way
// use first\test as FirstTest;

$obj = new first\test();
$obj->test();
