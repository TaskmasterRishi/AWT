<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to validate the password
function validatePassword($password) {
    return preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,12}$/', $password);
}

// Function to validate mobile number
function validateMobile($mobile) {
    return preg_match('/^\d{10}$/', $mobile);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    // Validate password
    if (!validatePassword($password)) {
        die("Error: Password must be 8-12 characters long, contain special characters, numbers, and capital letters.");
    }
    
    // Validate mobile number
    if (!validateMobile($mobile)) {
        die("Error: Mobile number must be exactly 10 digits.");
    }

    // Validate email
    if ($email !== $_POST['username']) {
        die("Error: Username should be the same as the email.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO employees (email, password, mobile) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $mobile);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
