<?php
session_start();

function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

// Generate CSRF token
$csrfToken = generateCSRFToken();

// Generate JWT as a session token
$tokenPayload = ['user_id' => 123, 'username' => 'example_user'];
$sessionToken = base64_encode(json_encode($tokenPayload));

// Store the session token in a secure manner (e.g., database)
// For demonstration purposes, we'll store it in the session itself
$_SESSION['session_token'] = $sessionToken;

// Regenerate the session ID
session_regenerate_id(true); // Passing true deletes the old session data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="process_login.php" method="post">
        <!-- CSRF token input -->
        <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
        
        <!-- User input fields -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <!-- Submit button -->
        <button type="submit">Login</button>
    </form>
</body>
</html>
