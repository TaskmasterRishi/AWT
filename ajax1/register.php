<?php
require 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo "Passwords do not match.";
    $conn->close();
    exit();
}

$check = "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($check);

if ($result->num_rows > 0) {
    echo "User_exists";
    $conn->close();
    exit();
}

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
