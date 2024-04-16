<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>

<body>
    <form method="POST" action="">
        <label for="number">Number :</label>
        <input type="number" name="number" id=number>
        <button type="submit">Submit</button><br>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    $pal = 0;
    $original = $num;
    $temp;
    while ($num != 0) {
        $temp = $num % 10;
        $pal = $pal * 10 + $temp;
        $num = (int) ($num / 10);
    }
    if ($original == $pal) {
        echo "Number is a palindrome.";
    } else {
        echo "Number is not a palindrome.";
    }
}
?>