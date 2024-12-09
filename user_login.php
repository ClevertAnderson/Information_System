<?php
// Start the session to handle user sessions
session_start();

// Include the database connection
$conn = new mysqli('localhost', 'root', '', 'user_system');

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture and sanitize form data
    $email = trim($_POST['email']);  // Use 'email' instead of 'username'
    $password = $_POST['password'];

    // Input validation: Ensure both fields are filled
    if (empty($email) || empty($password)) {
        die('Please enter both email and password.');
    }

    // Prepare the SQL query to fetch user data
    $sql = "SELECT id, username, email, password FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('s', $email); // Bind the email to the query
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $db_username, $db_email, $db_password);
            $stmt->fetch();

            // Verify the provided password against the stored hash
            if (password_verify($password, $db_password)) {
                // Set session variables
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $db_username;
                $_SESSION['email'] = $db_email;

                // Redirect to the dashboard page after successful login
                header("Location: dashboard.php");
                exit; // Stop script execution after redirection
            } else {
                echo "Incorrect password. Please try again.";
            }
        } else {
            echo "No user found with that email.";
        }
        $stmt->close(); // Close the prepared statement
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close(); // Close the database connection
} else {
    echo "Invalid request method.";
}
