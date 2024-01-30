<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check CSRF token validity
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
        // Proceed with the login process

        // Validate user credentials (replace this with your authentication logic)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Your authentication logic here (for illustration purposes, check for a hardcoded username and password)
        $validUsername = 'user';
        $validPassword = 'password';

        if ($username === $validUsername && $password === $validPassword) {
            // Generate a new session token (JWT)
            $tokenPayload = ['user_id' => 123, 'username' => $validUsername];
            $sessionToken = base64_encode(json_encode($tokenPayload));

            // Store the new session token in a secure manner (e.g., database)
            // For demonstration purposes, we'll store it in the session itself
            $_SESSION['session_token'] = $sessionToken;

            echo 'Login successful! Welcome, ' . $username;
            // echo "<script language=\"javascript\">
            // var phpSessionId = document.cookie.match(/PHPSESSID=[A-Za-z0-9]+\;/i);
            // alert(phpSessionId);
            // </script>";
        } else {
            echo 'Invalid username or password';
        }
    } else {
        // Invalid CSRF token, reject the request
        die('Invalid CSRF token. This request has been blocked.');
    }
}

