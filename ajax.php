<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "password") {
        $_SESSION["user"] = $username;
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Login Form</h1>
    <form id="login-form" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <div id="message"></div>

    <script>
        $(document).ready(function () {
            $("#login-form").on("submit", function (event) {
                event.preventDefault();

                var username = $("#username").val();
                var password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "P3.php",
                    data: { username: username, password: password },
                    success: function (response) {
                        $("#message").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>
