<?php

include './db.php';

$ConnObj = new Database();

$ConnObj->Insert('demos',["fname"=>"Rakesh","lname"=>"Kir"]);
