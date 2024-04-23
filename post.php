<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check if the 'name' and 'email' keys exist
            if (isset($_POST['name']) && isset($_POST['email'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                echo "Hello, $name! Your email is $email.";
            } else {
                echo "Please fill out the form.";
            }
        }
    ?>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
