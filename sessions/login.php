<?php
session_start(); // Start the session

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'Rishi' && $password == 'rishi') {
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
