<?php
session_start();
require 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        echo "success";
    } else {
        echo "Incorrect password. Try again.";
    }
} else {
    echo "not_registered";
}

$conn->close();
?>
