<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patern</title>
</head>

<body>
    <form method="POST" action="">
        <label for="number">Number of rows</label>
        <input type="number" name="number" id=number>
        <button type="submit">Submit</button><br>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    $count=1;
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "$count ";
            $count++;
        }
        echo "<br>";
    }
}
?>