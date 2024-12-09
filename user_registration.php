<?php
// user_registration.php

// Start the session for user feedback or debugging
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'user_system');

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture and sanitize form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Input validation: Check for empty fields
    if (empty($username) || empty($email) || empty($password)) {
        die('Please fill in all fields.');
    }

    // Check if the email already exists in the database
    $check_email_sql = "SELECT id FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($check_email_sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            die('This email is already registered. Please use another one.');
        }
        $stmt->close();
    } else {
        die("Error preparing statement: " . $conn->error);
    }

    // Hash the password securely using bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert the new user into the database
    $insert_sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($insert_sql)) {
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            // Registration successful, redirect to login page
            $_SESSION['message'] = "Registration successful! Please log in.";
            header("Location: login.php");
            exit; // Stop further execution after redirection
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        die("Error preparing statement: " . $conn->error);
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
