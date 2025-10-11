
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
		$mail->Username   = 'galaxyconsultancyorg@zohomail.in'; // your Zoho email
		$mail->Password   = '41uewx7D9Zap'; // app password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 465;
		$mail->setFrom('galaxyconsultancyorg@zohomail.in', 'Galaxy Consultancy Website');
		$mail->addAddress("mail@galaxyconsultancy.org"); // where to receive mail

		$mail->isHTML(true);
		$mail->Subject = "New Enquiry from Galaxy Consultancy Website";
		$mail->Body    = "
            <h3>New Enquiry Details:</h3>
            <p><strong>Name:</strong> {$_isim}</p>
            <p><strong>Email:</strong> {$_eposta}</p>
            <p><strong>Phone:</strong> {$_telefon}</p>
            <p><strong>Message:</strong><br>{$_mesaj}</p>
        ";

		$mail->AltBody = "New Enquiry Details:\n
            Name: {$_isim}\n
            Email: {$_eposta}\n
            Phone: {$_telefon}\n
            Message: {$_mesaj}";

		$mail->send();
		echo "Success! Enquiry has been sent.";
	} catch (Exception $e) {
		echo "Error: Mail could not be sent. PHPMailer Error: {$mail->ErrorInfo}";
	}
}
