<?php

include './db.php';
$obj = new Database();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="save-data.php" method="post">
        <label for="">First name:</label>
        <input type="text" name="fname" id=""><br><br>

        <label for="">Last name:</label>
        <input type="text" name="lname" id=""><br><br>

        <label for="">City name:</label>
        <select name="cname" id="">
            <?php
            $obj->Select('city');
            $result = $obj->GetResult();
            foreach ($result as list("cid" => $cid, "name" => $cname)) {
                echo "<option value='$cid'>$cname</option>";
            }
            ?>

        </select>
        <button type="submit" value="Save">Save</button>
    </form>
</body>

</html>