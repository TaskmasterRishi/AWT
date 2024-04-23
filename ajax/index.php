<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h2>Login Form</h2>
    <form id="loginForm" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="button" id="loginButton">Login</button>
    </form>

    <div id="response"></div>

    <script>
    $(document).ready(function() {
        $("#loginButton").click(function() {
            var username = $("#username").val();
            var password = $("#password").val();
            
            $.ajax({
                url: "login_process.php",
                type: "post",
                data: {username: username, password: password},
                success: function(response) {
                    $("#response").html(response);
                }
            });
        });
    });
    </script>
</body>
</html>
