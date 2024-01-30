<?php
$host = "localhost";
$db_user = "root";
$db_password = "root";
$database = "test";

$conn = mysqli_connect($host, $db_user, $db_password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Get user input
    $input_name = $_POST['name'];
    $input_password = $_POST['password'];

    // Secure SQL query using prepared statement
    $query = "SELECT * FROM student WHERE name=? AND password=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $input_name, $input_password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        echo "Welcome, $input_name!";
    } else {
        // Authentication failed
        echo "Invalid name or password.";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       Name: <input type="text" name="name"><br><br>
       Password: <input type="password" name="password"><br><br>
       <button type="submit" name="submit" value="Submit">Submit</button>
    </form>
</body>
</html>
