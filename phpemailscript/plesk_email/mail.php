<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

$response = array('result' => 'error', 'error' => 'Unknown error');

try {
    if (isset($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["commend"])) {
        // Database connection (example, consider using secure methods for credentials)
        $dsn = "mysql:host=localhost;port=3306;dbname=hsprraad_blog";
        $username = "hsprraad_blog";
        $password = "Meena@1997";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        );
        $connect = new PDO($dsn, $username, $password, $options);

        // Prepare and execute query
        $query = "INSERT INTO appointment (name, email, phone, commend) 
                  VALUES (:name, :email, :phone, :commend)";
        $statement = $connect->prepare($query);

        $data = array(
            ':name' => $_POST["name"],
            ':email' => $_POST["email"],
            ':phone' => $_POST["phone"],
            ':commend' => $_POST["commend"]
        );

        $statement->execute($data);

        // Send email confirmation to user using PHPMailer
        $mail = new PHPMailer(true);
        try {
            //Server settings
         /*  $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'meenaweb1997@gmail.com'; // Your Gmail address
            $mail->Password   = 'gmra cfjp ihjw tryw';  // Your Gmail password or app-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587; */
			
			// Server settings
            $mail->isSMTP();
            $mail->Host       = 'mail.bccmartech.in'; // Replace with your correct SMTP host
            $mail->SMTPAuth   = true;
            $mail->Username   = 'developer@bccmartech.in'; // Your webmail address
            $mail->Password   = 'Developers@12345';  // Your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587; // Adjust the port as per your webmail provider
			
            // Recipients
            $mail->setFrom('developer@bccmartech.in', 'Srinivaspriya Hospital');
            $mail->addAddress($_POST["email"], $_POST["name"]);
			$mail->addBCC('dm@redwudcreations.com'); // Add BCC for user email
            $mail->addCC('dm.srinivaspriyahospital@gmail.com'); // Add CC for user email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Appointment Confirmation';
            $mail->Body    = "<html><body>
                              <p>Dear " . htmlspecialchars($_POST["name"]) . ",</p>
                              <p>Thank you for booking an appointment with Srinivaspriya Hospital. We will get back to you within 24 hours.</p>
                              </body></html>";

            $mail->send();

            // Send email notification to admin(s)
            $adminEmails = ['dm@redwudcreations.com', 'dm.srinivaspriyahospital@gmail.com', 'developer@bccmartech.in'];
            $mail->ClearAllRecipients(); // Clear previous recipient

            $mail->Subject = 'New Appointment Booking';
            $mail->Body    = "<html><body>
                              <p>A new appointment has been booked at Srinivaspriya Hospital.</p>
                              <p>Details:</p>
                              <ul>
                              <li>Name: " . htmlspecialchars($_POST["name"]) . "</li>
                              <li>Email: " . htmlspecialchars($_POST["email"]) . "</li>
                              <li>Phone: " . htmlspecialchars($_POST["phone"]) . "</li>
                              <li>Commend: " . htmlspecialchars($_POST["commend"]) . "</li>
                              </ul>
                              </body></html>";

            foreach ($adminEmails as $adminEmail) {
                $mail->addAddress($adminEmail);
               
            }
			$mail->addBCC('dm@redwudcreations.com'); // Add BCC for user email
            $mail->addCC('dm.srinivaspriyahospital@gmail.com'); // Add CC for user email
			 $mail->send();
              $mail->ClearAddresses(); // Clear recipient for the next admin email

            $response['result'] = 'success';
        } catch (Exception $e) {
            $response['error'] = "Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $response['error'] = 'Incomplete form data';
    }
} catch (PDOException $e) {
    $response['error'] = 'Database Error: ' . $e->getMessage();
} catch (Exception $e) {
    $response['error'] = 'General Error: ' . $e->getMessage();
}

echo json_encode($response);
?>
