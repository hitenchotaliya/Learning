<?php
if (isset($_FILES['image'])) {

    $fname = $_FILES['image']['name'];
    $fsize = $_FILES['image']['size'];
    $ftmpname = $_FILES['image']['tmp_name'];
    $ftype = $_FILES['image']['type'];
    $uploadpath = "uploads/";
    $newPath="moved/";

    if (move_uploaded_file($ftmpname, $uploadpath . $fname)) {
        echo "Successfully uploaded";

        //move to another folder
        $npath=$uploadpath.$fname;
        if(rename($uploadpath.$fname,$newPath)){
            echo "Files successfully moved";
        }else{
            echo "File not moved";
        }


    } else {
        echo "Could not upload file";
    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>

<body>
    <form action="UploadExternal.php" method="post" enctype="multipart/form-data">
        Upload: <input type="file" name="image" id="">
        <button type="submit">Submit</button>
    </form>
</body>

</html>