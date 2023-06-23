<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // TODO: Process the form data (e.g., send an email, store in a database, etc.)

    // Send email
    $to = "jennyandrus1@gmail.com"; // Replace with the actual email address
    $subject = "New Inquiry";
    $emailBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    mail($to, $subject, $emailBody);

    // Database connection
    $host = "localhost";
    $username = "your-username";
    $password = "your-password";
    $database = "your-database";

    // Connect to the database
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert form data into a table
    $sql = "INSERT INTO inquiries (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
    } else {
        // Error occurred while inserting data
    }

    // Close the database connection
    $conn->close();

    // Redirect to a thank-you page or display a success message
    header("Location: thank-you.html");
    exit;
}
?>

