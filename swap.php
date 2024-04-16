<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>
                    <label for="number1">Enter Number 1: </label>
                    <input type="number" name="number1" id="number1">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="number2">Enter Number 2: </label>
                    <input type="number" name="number2" id="number2">
                </td>
            </tr>
        </table>
        <button type="submit">submit</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    echo "Number 1 = $num1 </br>";
    echo "Number 2 = $num2 </br></br>";
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    echo "Number 1 = $num1 </br>";
    echo "Number 2 = $num2";
}
?>