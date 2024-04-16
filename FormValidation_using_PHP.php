<!-- php validation
1. name 2.password(blank.6 to 12) 3.pincode 4.mobile no(blank,10 digit) 5.email validation 6. student id(blank) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<?php
$nameErr = $passwordErr = $conformPasswordErr = $pincodeErr = $mobileErr = $emailErr = $sidErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $conformPassword = $_POST["Conform_Password"];
    $mobile = $_POST["phone_no"];
    $pincode = $_POST["pincode"];
    $email = $_POST["email"];
    $sid = $_POST["sid"];

    validateName($name);
    validatePassword($password);
    validateConformPassword($conformPassword, $password);
    validateEmail($email);
    validatePincode($pincode);
    validatePhone($mobile);
    validateSid($sid);
}
?>

<style>
    .error {
        color: red;
    }
</style>

<body>
    <form method="POST">
        <span class="error">* : Required</span>
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name"></td>
                <td>
                    <span class="error">
                        *
                        <?php echo $nameErr ?>
                    </span>
                </td>

            </tr>

            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password"></td>
                <td>
                    <span class="error">
                        *
                        <?php echo $passwordErr ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td><label for="Conform_Password">Conform Password</label></td>
                <td><input type="password" name="Conform_Password" id="Conform_Password"></td>
                <td>
                    <span class="error">
                        *
                        <?php echo $conformPasswordErr ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td><label for="phone_no">Mobile Number</label></td>
                <td><input type="text" name="phone_no" id="phone_no"></td>
                <td>
                    <span class="error">
                        *
                        <?php echo $phoneErr ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td><label for="pincode">Pin-code</label></td>
                <td><input type="text" name="pincode" id="pincode"></td>
                <td>
                    <span class="error">
                        *
                        <?php echo $pincodeErr ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" name="email" id="email"></td>
                <td>
                    <span class="error">
                        *
                        <?php echo $emailErr ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td><label for="sid">Student ID</label></td>
                <td><input type="text" name="sid" id="sid"></td>
                <td>
                    <span class="error">
                        *
                        <?php echo $sidErr ?>
                    </span>
                </td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>

<?php

function validateName($name)
{
    global $nameErr;
    if (empty($name)) {
        $nameErr = "Name is empty";
    } else {
        if (!preg_match("/^[a-zA-Z\s]*$/", $name)) {
            $nameErr = "Numbers are not allowed in name";
        }
    }
}

function validatePassword($password)
{
    global $passwordErr;
    if (empty($password)) {
        $passwordErr = "Password is empty";
    } else {
        if (strlen($password) < 6 || strlen($password) > 12) {
            $passwordErr = "Password should be between 6 to 12 characters";
        }
    }
}

function validateConformPassword($conformPassword, $password)
{
    global $conformPasswordErr;
    if ($conformPassword != $password) {
        $conformPasswordErr = "Does not match with password";
    }
}

function validateEmail($email)
{
    global $emailErr;
    if (empty($email)) {
        $emailErr = "Email is empty";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Please enter proper formate of email";
        }
    }
}

function validatePhone($phone)
{
    global $phoneErr;
    if (empty($phone)) {
        $phoneErr = "Phone no is Empty";
    } else {
        if (!preg_match("/^[0-9\s]*$/", $phone) || strlen($phone) != 10) {
            $phoneErr = "Plese input proper Phone no formate";
        }
    }
}

function validateSid($sid)
{
    global $sidErr;
    if (empty($sid)) {
        $sidErr = "Student ID is empty";
    }
}

function validatePincode($pincode)
{
    global $pincodeErr;
    if (empty($pincode)) {
        $pincodeErr = "Pincode is Empty";
    } else {
        if (!preg_match("/^[0-9\s]*$/", $pincode) || strlen($pincode) > 6) {
            $pincodeErr = "Plese input proper Pincode formate";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "
    <table>
        <tr>
            <td>Your Name</td>
            <td>$name</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>$password</td>
        </tr>
        <tr>
            <td>Conformed Password</td>
            <td>$conformPassword</td>
        </tr>  
        <tr>
            <td>Pin Code</td>
            <td>$pincode</td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td>$mobile</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>$email</td>
        </tr>
        <tr>
            <td>Student ID</td>
            <td>$sid</td>
        </tr>
    </table>
    ";
}
?>

</html>