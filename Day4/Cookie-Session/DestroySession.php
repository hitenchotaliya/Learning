<?php
session_start();
session_unset();
session_destroy();

if(session_status()==PHP_SESSION_NONE){
    echo "Session is destoy sucessfully<br>";
}
else{
    echo "Session is not destroyed<br>";
}
?>
<a href="Session.php">Click here to start</a>