<?php

include './db.php';

$ConnObj = new Database();

$ConnObj->Insert('test',["fname"=>"Rakesh","lname"=>"Kir"]);