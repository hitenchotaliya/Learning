<?php

if (isset($_REQUEST['submit'])) {
    if (filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
        $email = $_GET['email'];
        echo "Email is valid";
        echo "<br>" . $email;
    } else {
        echo "Not valid email";
    }
}
if (isset($_REQUEST['submit1'])) {
    $options = array(
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    );
    if (filter_input(INPUT_POST, "marks", FILTER_VALIDATE_INT, $options)) {
        echo "Marks is valid";
    }
    else{
        echo "Marks is not valid";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        E-mail: <input type="text" name="email">
        <button type="submit" name="submit">Submit</button>
    </form>
    <form action="" method="post">
        Marks: <input type="text" name="marks">
        <button type="submit" name="submit1">Submit</button>
    </form>
</body>

</html>