<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>

<body>
    <h1>Send mail</h1>
    <form action="" method="post">
        Name: <input type="text" name="name" />
        Email: <input type="text" name="email" />
        Message: <input type="text" name="msg" />
        <button type="submit" name="submit">Send</button>
    </form>
</body>

</html>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    //Load Composer's autoloader
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
      //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'assignment8735@gmail.com';                     //SMTP username
        $mail->Password   = 'szps mqjy teul kzgi';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('assignment8735@gmail.com', 'Mailer');
        $mail->addAddress('chotaliyahiten8@gmail.com', 'Test Web');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Test Here is the subject';
        $mail->Body    = "Sender name - $name <br> Sender Email - $email <br>
                         Sender Message- $msg ";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>