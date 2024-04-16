<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nameErr = $emailErr = $numberErr = $urlErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["phone"];
        $url = $_POST["url"];

        validate_name($name);
        validate_email($email);
        validate_number($number);
        validate_url($url);
    }

    ?>

    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <label for="name">Name:</label>
                </td>
                <td>
                    <input type="text" id="name" name="name">
                    <span class="error">
                        <?php echo $nameErr; ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-mail:</label>
                </td>
                <td>
                    <input type="text" id="email" name="email">
                    <span class="error">
                        <?php echo $emailErr; ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Phone Number:</label>
                </td>
                <td>
                    <input type="tel" id="phone" name="phone">
                    <span class="error">
                        <?php echo $numberErr; ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="url">URL:</label>
                </td>
                <td>
                    <input type="text" id="url" name="url">
                    <span class="error">
                        <?php echo $urlErr; ?>
                    </span>
                </td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php
function validate_name($name)
{
    global $nameErr;

    if (empty($name)) {
        $nameErr = "Name is not written";
    } else {
        if (!preg_match("/^[a-zA-Z\s]*$/", $name)) {
            $nameErr = "Only alphabets and white space are allowed";
        }
    }
}

function validate_email($email)
{
    global $emailErr;

    if (empty($email)) {
        $emailErr = "Email is not written";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid Email Format";
        }
    }
}

function validate_number($number)
{
    global $numberErr;

    if (empty($number)) {
        $numberErr = "Number is not written";
    } else {
        if (!preg_match("/^[0-9]*$/", $number) or strlen($number) != 10) {
            $numberErr = "Invalid number Format";
        }
    }
}

function validate_url($url)
{
    global $urlErr;
    if (empty($url)) {
        $urlErr = "Url is empty";
    } else {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            echo "Invalid url Format";
        }
    }
}

?>