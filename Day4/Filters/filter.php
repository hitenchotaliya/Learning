<?php
$email = "john<<<<<$.doe@example.com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address");
} else {
    echo ("$email is not a valid email address");
}
?>
<?php
$url = "https://www.w3schools";

$url = filter_var($url, FILTER_SANITIZE_URL);

if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>