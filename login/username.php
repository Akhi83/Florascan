<?php
session_start();

// Dummy credentials for login
$valid_username = "admin";
$valid_password = "password123";

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $valid_username && $password === $valid_password) {
    // Login successful
    $_SESSION['loggedin'] = true;
    header('Location: index.html');
} else {
    // Login failed
    echo "Invalid username or password. <a href='login.html'>Try again</a>";
}
?>
