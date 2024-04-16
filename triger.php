<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="triger.php" method="post">
        <p>Input a number less than 20</p>
        <input type="number" name="num" id="num">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["num"];

    if ($n > 20) {
        trigger_error("Number is greater than 20",E_USER_WARNING);
    }
    else{
        echo "Entred sucessfully";
    }
}
?>