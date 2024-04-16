<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<?php
require("config.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = mysqli_query($con, "SELECT * FROM users WHERE ID=$id");
    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($con);
        exit(); 
    }
} else {
    echo "ID not provided.";
    exit();
}
?>

<body>
    <form method="post" action="#">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $data["userName"]?>" required></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age" value="<?php echo $data["age"]?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $data["email"]?>" required></td>
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

    $sql = "UPDATE users SET userName='$name', age='$age', email='$email' WHERE ID=$id";

    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    echo"<a href=\"index.php\">See update</a>";

}
?>

</html>