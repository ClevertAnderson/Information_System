<?php
// db_connection.php

$servername = "localhost";  // Your database server, often 'localhost' for local environments
$username = "root";         // Your MySQL username (commonly 'root' in development environments)
$password = "";             // Your MySQL password (empty by default in local setups, set yours if necessary)
$dbname = "user";           // The database name you are using (in this case, it's 'user')

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // If the connection fails, show an error message
}
?>
