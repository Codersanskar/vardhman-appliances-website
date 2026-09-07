<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
error_reporting(E_ALL);
ini_set('display_errors', 1);
                        
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../vendor/autoload.php';

$sender_email = 'info@vardhmanappliances.com';
$sender_name = 'Vardhman Appliances';
$to_email ='info@vardhmanappliances.com';
//$to_email ='omsharmapro@gmail.com';
$to_name='Vardhman Appliances';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $type = $_POST['type'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    } else {
         $message = "";
    }
    if (isset($_POST['company'])) {
        $company = $_POST['company'];
    } else {
         $company = "";
    }
    if (isset($_POST['interest'])) {
        $interest = $_POST['interest'];
    } else {
         $interest = "";
    }
    if (isset($_POST['cv_link'])) {
        $cv_link = $_POST['cv_link'];
    } else {
         $cv_link = "";
    }
    
    $body = '<table border="1" cellpadding=10 cellspacing=0>
                <tr>
                    <td>Type:</td>
                    <td>'.$type.'</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>'.$name.'</td>
                </tr>
                 <tr>
                    <td>company:</td>
                    <td>'.$company.'</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>'.$phone.'</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>'.$email.'</td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td>'.$message.'</td>
                </tr>
                <tr>
                    <td>Interest:</td>
                    <td>'.$interest.'</td>
                </tr>
                <tr>
                    <td>CV Link:</td>
                    <td>'.$cv_link.'</td>
                </tr>
            </table>';

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';  // Your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'om@webmaddy.com'; // Your SMTP username
        $mail->Password = 'xsmtpsib-43755599ca06015d98b4c00db8f6b91a7bedf623718c7cdbb4e01f71da8d2901-EAZ6ktOVaqbmnpIh'; // Your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; // SMTP port

        // Recipients
        $mail->setFrom($sender_email, $sender_name); // Sender's email and name
        $mail->addAddress($to_email, $to_name); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = $type.' - Form Submission - '.$name;
        $mail->Body    = $body;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If the form is not submitted through POST request, return an error message
    echo "Error: Form data not submitted.";
}
?>
