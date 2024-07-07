<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if(isset($_POST["name"])){
    try {
        $connect = new PDO("mysql:host=localhost;dbname=mail", "root", ""); // host name, user name, password, database
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = array(
            ':name' => $_POST["name"],
            ':email' => $_POST["email"],
            ':phone' => $_POST["phone"],
            ':specialties' => $_POST["specialties"],
            ':appointmentdate' => $_POST["appointmentdate"],
            ':appointmenttime' => $_POST["appointmenttime"],
        );

        $query = "INSERT INTO data_sample (name, email, phone, specialties, appointmentdate, appointmenttime) 
                  VALUES (:name, :email, :phone, :specialties, :appointmentdate, :appointmenttime)";

        $statement = $connect->prepare($query);
        $statement->execute($data);

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Username = 'meenaweb1997@gmail.com'; // SMTP username (your email address)
            $mail->Password = 'oyrl cabc xzyk rdpi'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Sender info
            $mail->setFrom('premkumarcse1997@gmail.com', 'Your Company Name');

            // Add a recipient
            $mail->addAddress($_POST["email"]); // Add user email

            // User email content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Appointment Confirmation';

            // Embed logo image in the email
            $logoPath = 'C:/xampp/htdocs/projects/promed_website/images/logo.png'; // Path to your logo image
            $mail->addEmbeddedImage($logoPath, 'logo', 'logo.png'); // Attach logo image and assign CID

            // Email body with embedded image
            $mail->Body = "<html><body>";
            $mail->Body .= "<p>Dear " . $_POST["name"] . ",</p>";
            $mail->Body .= "<p>Thank you for booking an appointment we will get back you within 24 hours.</p>";
            $mail->Body .= "<p>Regards,<br>Your Company Name</p>";
            $mail->Body .= "<p><img src='cid:logo' alt='Company Logo' style='width:150px;height:auto;'></p>"; // Display embedded image
            $mail->Body .= "</body></html>";

            $mail->send();

            // Send separate email to admin
            $mail->ClearAllRecipients();
            $mail->addAddress('meenaweb1997@gmail.com'); // Add admin email
            $mail->Subject = 'New Appointment Booking';

            // Email body with embedded image for admin
            $mail->Body = "<html><body>";
            $mail->Body .= "<p>A new appointment has been booked.</p>";
            $mail->Body .= "<p>Details:</p>";
            $mail->Body .= "<ul>";
            $mail->Body .= "<li>Name: " . $_POST["name"] . "</li>";
            $mail->Body .= "<li>Email: " . $_POST["email"] . "</li>";
            $mail->Body .= "<li>Phone: " . $_POST["phone"] . "</li>";
            $mail->Body .= "<li>Specialties: " . $_POST["specialties"] . "</li>";
            $mail->Body .= "<li>Appointment Date: " . $_POST["appointmentdate"] . "</li>";
            $mail->Body .= "<li>Appointment Time: " . $_POST["appointmenttime"] . "</li>";
            $mail->Body .= "</ul>";
            $mail->Body .= "<p>Please contact the client for further details.</p>";
            $mail->Body .= "<p>Regards,<br>Your Company Name</p>";
            $mail->Body .= "<p><img src='cid:logo' alt='Company Logo' style='width:150px;height:auto;'></p>"; // Display embedded image
            $mail->Body .= "</body></html>";

            $mail->send();

            echo 'Form submitted successfully';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo 'Error: No data received';
}
?>
