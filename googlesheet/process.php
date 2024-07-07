<?php
header('Content-Type: application/json');

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data (example: you should add proper validation)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $specialties = $_POST['specialties'];
    $appointmentdate = $_POST['appointmentdate'];
    $appointmenttime = $_POST['appointmenttime'];

    // Database connection (adjust these settings according to your MySQL setup)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "promed";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die(json_encode(array('status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error)));
    }

    // Prepare SQL statement (adjust table and column names as per your database schema)
    $sql = "INSERT INTO appointment (name, email, phone, specialties, appointmentdate, appointmenttime)
            VALUES ('$name', '$email', '$phone', '$specialties', '$appointmentdate', '$appointmenttime')";

    if ($conn->query($sql) === TRUE) {
        // If data is successfully inserted
        $response = array('status' => 'success', 'message' => 'Form data stored successfully in MySQL');
    } else {
        // If an error occurred while inserting data
        $response = array('status' => 'error', 'message' => 'Error: ' . $sql . '<br>' . $conn->error);
    }

    // Close database connection
    $conn->close();

    // Send JSON response
    echo json_encode($response);
} else {
    // If request method is not POST
    echo json_encode(array('status' => 'error', 'message' => 'Only POST requests are allowed'));
}
?>
