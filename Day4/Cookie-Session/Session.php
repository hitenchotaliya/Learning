<?php

session_start();
$_SESSION['username'] = "Hiten";
$_SESSION['id'] = 15;

if (isset($_SESSION)) {
    echo "Session is set";
} else {
    echo "Session not set";
}

echo "<br>Welcome " . $_SESSION['username'] . "Your id is : " . $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="DestroySession.php" method="post">
        <button type="submit">Destory Session</button>
    </form>
</body>

</html>