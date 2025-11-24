<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enquiry_type = $_POST['enquiry_type'];

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

        $mail->isHTML(true);

        if ($enquiry_type == 'candidate') {
            $_isim = $_POST["name"];
            $_eposta = $_POST["email"];
            $_telefon = $_POST["phone"];
            $_mesaj = $_POST["message"];

            // Attach Resume if uploaded
            if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
                $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
            }

            $mail->Subject = "New Candidate Enquiry from Galaxy Consultancy Website";
            $mail->Body = "
                <h3>New Candidate Enquiry Details:</h3>
                <p><strong>Name:</strong> {$_isim}</p>
                <p><strong>Email:</strong> {$_eposta}</p>
                <p><strong>Phone:</strong> {$_telefon}</p>
                <p><strong>Message:</strong> {$_mesaj}</p>
            ";
            $mail->AltBody = "New Candidate Enquiry Details:\n
                Name: {$_isim}\n
                Email: {$_eposta}\n
                Phone: {$_telefon}\n
                Message: {$_mesaj}";
        } elseif ($enquiry_type == 'employer') {
            $company_name = $_POST['company_name'];
            $contact_person = $_POST['contact_person'];
            $company_email = $_POST['company_email'];
            $company_phone = $_POST['company_phone'];
            $employer_message = $_POST['employer_message'];

            // Handle multiple selected services
            $services_list = '';
            if (isset($_POST['service_type'])) {
                $services = $_POST['service_type'];

                // If it's a string (JSON), decode it to array
                if (is_string($services)) {
                    $services = json_decode($services, true);
                }

                // Ensure it's an array before imploding
                if (is_array($services)) {
                    $services_list = implode(", ", $services);
                }
            }

            $mail->Subject = "New Employer / Client Enquiry from Galaxy Consultancy Website";
            $mail->Body = "
            <h3>New Employer / Client Enquiry Details:</h3>
            <p><strong>Company Name:</strong> {$company_name}</p>
            <p><strong>Contact Person:</strong> {$contact_person}</p>
            <p><strong>Email:</strong> {$company_email}</p>
            <p><strong>Phone:</strong> {$company_phone}</p>
            <p><strong>Service(s) Required:</strong> {$services_list}</p>
            <p><strong>Additional Details:</strong> {$employer_message}</p>
        ";
            $mail->AltBody = "New Employer / Client Enquiry Details:\n
            Company Name: {$company_name}\n
            Contact Person: {$contact_person}\n
            Email: {$company_email}\n
            Phone: {$company_phone}\n
            Service(s) Required: {$services_list}\n
            Additional Details: {$employer_message}";
        }

        $mail->send();
        echo "Success";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
