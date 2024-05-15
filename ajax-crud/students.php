<?php
$conn = new mysqli('localhost', 'root', '', 'ajaxcrud');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$action = $_POST['action'];

if ($action == 'create') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $sql = "INSERT INTO students (username, email, age) VALUES ('$username', '$email', '$age')";
    $conn->query($sql);
} elseif ($action == 'read') {
    $result = $conn->query("SELECT * FROM students");
    $students = [];
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
    echo json_encode($students);
} elseif ($action == 'update') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $sql = "UPDATE students SET username='$username', email='$email', age='$age' WHERE ID='$id'";
    $conn->query($sql);
} elseif ($action == 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM students WHERE ID='$id'";
    $conn->query($sql);
}

$conn->close();
?>