<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $pincode = $_POST['pincode'];
            $mobile = $_POST['mobile'];

            if (empty($name) || empty($password) || empty($email) || empty($pincode) || empty($mobile)) {
                echo '<script>
                alert("ERROR!! All fields are necessary");
            </script>';
            } else {
                echo '<script>
                alert("Successfully Submitted !");
            </script>';
            }
        }
   ?>
    <form action="#" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"  ><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"  ><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"  ><br>

        <label for="pincode">Pincode:</label><br>
        <input type="number" id="pincode" name="pincode"  ><br>

        <label for="mobile">Mobile Number:</label><br>
        <input type="number" id="mobile" name="mobile"  ><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
