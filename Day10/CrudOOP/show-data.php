<?php

include './db.php';

$ConnObj = new Database();

$join = "city ON demo.cid = city.cid";
$ColumToShow = "demo.id,demo.fname,demo.lname,city.name";
$limit = '3';

// $ConnObj->Select('demo', $ColumToShow, $join, null, null, $limit);
$ConnObj->Select('demo', '*', $join, null, null, $limit);

$Result = $ConnObj->GetResult();

echo "<table border='1' width='500px'>
        <tr><th>ID</th>
        <th>First Name</td>
        <th>Last Name</td>
        <th>City</td></tr>";
    foreach ($Result as list("id" => $id, "fname" => $fname, "lname" => $lname, "name" => $cityname)) {
    echo "<tr><td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$cityname</td>
        </tr>";
    }
echo "</table>";
//Pagination
echo $ConnObj->Pagination('demo', $join, null, $limit);
