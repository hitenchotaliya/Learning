<?php
session_start();

// Step 1: Set File Permission
$uploadDir = 'uploads/';  // Directory outside the web root
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Step 2: Use getimagesize Method
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploadedfile'])) {
    $uploadedFile = $_FILES['uploadedfile'];
    
    // Step 3: Create an Upload Folder Outside of Root (already done in $uploadDir)
    
    // Step 4: Use .htaccess File (Make sure .htaccess is properly configured)
    
    // Step 5: Verify Session Authentication (You may have your own authentication logic)
    if (!isset($_SESSION['user_authenticated']) || $_SESSION['user_authenticated'] !== true) {
         // Redirect to the login page or display an error message
    header("Location: login.php");
    exit;
       // die('Authentication failed.');
    }

    // Step 6: Rename File with an Auto-generated Name
    $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid('file_') . '.' . $fileExtension;

    // Step 7: Restrict Upload File Size
    $maxFileSize = 1000000;  // 1 MB
    if ($uploadedFile['size'] > $maxFileSize) {
        die('File size exceeds the limit.');
    }

    // Step 8: Verify File Type using getimagesize
    $imageInfo = getimagesize($uploadedFile['tmp_name']);
    if (!$imageInfo || !in_array($imageInfo['mime'], ['image/gif', 'image/jpeg'])) {
        die('Invalid file type. Only GIF and JPEG images are allowed.');
    }

    // Move the uploaded file to the secure directory with the new name
    $targetPath = $uploadDir . $newFileName;
    if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
        // Additional logic if the upload was successful
        echo 'File uploaded successfully.';
    } else {
        echo 'There was an error uploading the file, please try again!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure File Upload</title>
</head>
<body>

    <h2>File Upload Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- CSRF token input (add your own token generation logic) -->
        <input type="hidden" name="csrf_token" value="<?php echo bin2hex(random_bytes(32)); ?>">

        <!-- User input fields -->
        <label for="uploadedfile">Select File:</label>
        <input type="file" id="uploadedfile" name="uploadedfile" accept="image/*" required><br>

        <!-- Submit button -->
        <button type="submit">Upload</button>
    </form>

</body>
</html>
