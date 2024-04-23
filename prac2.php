<html>

<head>
    <title>College Library Student Details</title>
</head>

<body>
    <h3>College Library Student Details Form</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <br><br>

        <label for="rollno">Roll No:</label>
        <input type="text" name="rollno">
        <br><br>

        <label for="department">Department:</label>
        <input type="text" name="department">
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email">
        <br><br>

        <label for="phone">Phone:</label>
        <input type="number" name="phone">
        <br><br>

        <input type="submit" value="Submit" name="submit">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $rollno = $_POST['rollno'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if (empty($name)) {
            echo "Name is required <br>";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                echo "Only letters and white space allowed <br>";
            }
        }

        if (empty($rollno)) {
            echo "Roll No is required <br>";
        }


        if (empty($department)) {
            echo "Department is required <br>";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/", $department)) {
                echo "Only letters and white space allowed <br>";
            }
        }

        if (empty($email)) {
            echo "Email is required <br>";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format <br>";
            }
        }

        if (empty($phone)) {
            echo "Phone is required <br>";
        } else {
            if (!preg_match("/^[0-9]{10}$/", $phone)) {
                echo "Invalid phone number <br>";
            }
        }

    }

    ?>

</body>

</html>