<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'email@gmail.com';                     //SMTP username
    $mail->Password   = 'passwordgmail';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('email@gmail.com', 'Admin');
    $mail->addAddress($_POST['email']);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Pesan Masuk!';
    $mail->Body    = "<p>Nama : " . $_POST['name'] . "</p>" . "<p>" . "Email : " . $_POST['email'] . "</p>" . "<p>Pesan : " . $_POST['description'] . "</p>";

    $mail->send();
    $msg = "Pesan berhasil terkirim!";
} catch (Exception $e) {
    $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        * {
            font-family: Arial;

        }

        .card {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 20px 10px;
            max-width: 300px;
            margin: 6em auto;
            text-align: center;
            display: flex;
            justify-content: center;
            align-content: center;
            border-radius: 10px;
        }

        .main {
            height: 100%;
            width: 100%;
        }

        .copy {
            margin: 10px 0;
            font-size: 10px;
            color: gray;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="card">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#47bcee"><path d="M86,6.88c-43.62608,0 -79.12,35.49392 -79.12,79.12c0,43.62952 35.49392,79.12 79.12,79.12c43.62952,0 79.12,-35.49048 79.12,-79.12c0,-43.62608 -35.49048,-79.12 -79.12,-79.12zM123.24488,56.97328l-39.59784,58.35272l-30.94968,-28.72056c-1.3932,-1.29 -1.47576,-3.46752 -0.18232,-4.86072c1.29,-1.39664 3.47096,-1.47232 4.86072,-0.18232l25.0776,23.26816l35.09832,-51.72384c1.06984,-1.57208 3.20952,-1.978 4.77816,-0.91504c1.57552,1.0664 1.98488,3.20608 0.91504,4.7816z"></path></g></g></svg>
                <h1><?= $msg; ?></h1>
            </div>
        </div>
    </div>
</body>
</html>
