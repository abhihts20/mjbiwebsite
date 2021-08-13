<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$education = $_POST['education'];
$passingYear = $_POST['passing-year'];
$position = $_POST['position'];
$experience = $_POST['experience'];

$subject = 'Careers Form Submission : ' . $name;
$mailContent = "<h3>Careers Form Details Are: </h3>
<br>
<p><strong>Name:</strong> $name<br>
<strong>Email:</strong> $email<br>
<strong>Mobile Number:</strong> $mobile<br>
<strong>Education:</strong> $education<br>
<strong>passing-year:</strong> $passingYear<br>
<strong>Position:</strong> $position<br>
<strong>Experience:</strong> $experience<br><p>";


$subjectUser = 'Thank You for contacting Agrofarm Development Limited';
$mailUser = "<p>Hi $name,<br>Thank You for showing your interest in our organisation. We wanted to let you know that
We received your message and will contact you soon.<p>";
email("info.agrofarmdevelopment@gmail.com", $subject, $mailContent);
email($email, $subjectUser, $mailUser);

function email($email, $subject, $mailContent)
{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'mail.agrofarmdevelopment.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@agrofarmdevelopment.com';
    $mail->Password = 'manish@12345';
    $mail->SMTPSecure = 'SMTP';
    $mail->Port = 25;

    $mail->setFrom('noreply@agrofarmdevelopment.com', 'Agrofarm Development Private Limited');
    $mail->addReplyTo('', 'Agrofarm Development Private Limited');

    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $mailContent;

// Send email
    if (!$mail->send()) {
        return FALSE;
//            echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        if ($email != "") {
            header("Location: https://agrofarmdevelopment.com/");
        }
        return TRUE;
    }
}

?>
