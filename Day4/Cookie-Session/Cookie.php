<?php
$CookieName="Category";
$CookieValue="Book";
setcookie($CookieName,$CookieValue,time() + 86400,"/");
//unset($_COOKIE);

if(isset($_COOKIE)){
    
    echo "Cookie is set<br>";
}
else{
    echo "Cookie is not set<br>";
}

$cat= $_COOKIE['Category'];
echo "Cookie is : ". $cat;
?>