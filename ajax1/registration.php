<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <h2>Registration</h2>
    <form id="registrationForm">
        <label for="regUsername">Username:</label>
        <input type="text" id="regUsername" name="username" required><br>
        <label for="regPassword">Password:</label>
        <input type="password" id="regPassword" name="password" required><br>
        <label for="regConfirmPassword">Confirm Password:</label>
        <input type="password" id="regConfirmPassword" name="confirm_password" required><br>
        <button type="submit">Register</button>
    </form>

    <div id="message"></div>

    <script>
        $(document).ready(function () {
            $('#registrationForm').submit(function (e) {
                e.preventDefault();
                var password = $('#regPassword').val();
                var confirmPassword = $('#regConfirmPassword').val();

                if (password !== confirmPassword) {
                    $('#message').html('Passwords do not match.');
                    return;
                }

                $.ajax({
                    type: 'POST',
                    url: 'register.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        if (response.trim() === 'success') {
                            $('#message').html("Registration successful! Redirecting to login page...");
                            setTimeout(function () {
                                window.location.href = 'loginmain.php';
                            }, 2000);
                        }
                        else if (response.trim() === 'User_exists'){
                            $('#message').html("User already Exists! Redirecting to login page...");
                            setTimeout(function () {
                                window.location.href = 'loginmain.php';
                            }, 2000);
                        }
                        else {
                            $('#message').html(response);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>