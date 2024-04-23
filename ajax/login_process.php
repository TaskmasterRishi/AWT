<?php
session_start();

// Check if username and password are correct (You need to implement your authentication logic here)
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === "admin" && $password === "password") {
    $_SESSION['username'] = $username;
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}
?>
