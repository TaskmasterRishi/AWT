<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<?php
require_once("config.php");
?>

<body>
    <form method="post" action="#">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (userName,age,email) VALUES ('$name','$age','$email')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    echo"<a href=\"index.php\">See update</a>";
}
?>

</html>