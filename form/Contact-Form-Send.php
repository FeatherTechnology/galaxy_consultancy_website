<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_isim = $_POST["isim"];
    $_eposta = $_POST["eposta"];
    $_telefon = $_POST["telefon"];
    $_mesaj = $_POST["mesaj"];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.zoho.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'galaxyconsultancyorg@zohomail.in'; 
        $mail->Password   = '41uewx7D9Zap'; // use app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('galaxyconsultancyorg@zohomail.in', 'Galaxy Consultancy Website');
        $mail->addAddress("mail@galaxyconsultancy.org");

        // Attach Resume if uploaded
        if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
            $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
        }

        $mail->isHTML(true);
        $mail->Subject = "New Enquiry from Galaxy Consultancy Website";
        $mail->Body    = "
            <h3>New Enquiry Details:</h3>
            <p><strong>Name:</strong> {$_isim}</p>
            <p><strong>Email:</strong> {$_eposta}</p>
            <p><strong>Phone:</strong> {$_telefon}</p>
            <p><strong>Message:</strong> {$_mesaj}</p>
        ";

        $mail->AltBody = "New Enquiry Details:\n
            Name: {$_isim}\n
            Email: {$_eposta}\n
            Phone: {$_telefon}\n
            Message: {$_mesaj}";

        $mail->send();
        echo "Success";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
