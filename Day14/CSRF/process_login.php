<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check CSRF token validity
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
        // Proceed with the login process
        // Process login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Your authentication logic here (for illustration purposes, check for a hardcoded username and password)
        $validUsername = 'user';
        $validPassword = 'password';

        if ($username === $validUsername && $password === $validPassword) {
            echo 'Login successful! Welcome, ' . $username;
        } else {
            echo 'Invalid username or password';
        }
    } else {
        // Invalid CSRF token, reject the request
        echo '<br>Hello i am from Process Login ' . $_SESSION['csrf_token'];
        die('<br>Invalid CSRF token. This request has been blocked.');
    }

    // Regenerate CSRF token after login (optional but recommended)
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
