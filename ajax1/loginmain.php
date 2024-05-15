<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <h2>Login</h2>
    <form id="loginForm">
        <label for="loginUsername">Username:</label>
        <input type="text" id="loginUsername" name="username" required><br>
        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    
    <div id="message"></div>

    <script>
        $(document).ready(function(){
            $('#loginForm').submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: $(this).serialize(),
                    success: function(response){
                        if(response.trim() === 'success') {
                            $('#message').html("Login successful! Redirecting to home page...");
                            setTimeout(function(){
                                window.location.href = 'welcome.html';
                            }, 2000);
                        } else if (response.trim() === 'not_registered') {
                            $('#message').html("User is not registered. Redirecting to registration page...");
                            setTimeout(function(){
                                window.location.href = 'registration.php';
                            }, 2000);
                        } else {
                            $('#message').html(response);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
