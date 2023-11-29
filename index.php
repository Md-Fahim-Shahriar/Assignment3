<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "contactDB");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO contactlist (name, email, phone, message) VALUES ('$full_name', '$email', '$phone_number', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form data submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
