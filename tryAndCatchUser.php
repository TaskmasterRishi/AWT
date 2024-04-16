<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>

<body>
    <form method="post" action="">
        <table>
            <tr>
                <td><label for="number1">Number one :</td>
                <td><input type="number" name="number1" id="number1" required></td>
            </tr>
            <tr>
                <td>
                    <lable for="number2">Number two :
                </td>
                <td><input type="number" name="number2" id="number2" require></td>
            </tr>
            <tr>
                <td>
                    <lable for="operations">Operations :
                </td>
                <td>
                    <select name="operations" id="operations">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="/">/</option>
                        <option value="*">*</option>
                    </select>
                <td>
            </tr>
        </table>
        <button type="Submit" value="Submit">Submit</button>
        <button type="reset" value="reset">Reset</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $operation = $_POST["operations"];
    try {
        switch ($operation) {
            case '+':
                add($num1, $num2);
                break;
            case '-':
                sub($num1, $num2);
                break;
            case '*':
                mul($num1, $num2);
                break;
            case '/':
                div($num1, $num2);
                break;
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function add($n1, $n2)
{
    echo $n1 + $n2;
}

function sub($n1, $n2)
{
    if ($n2 > $n1) {
        trigger_error("Answer will be in negative");
    }
    echo $n1 - $n2;
}

function mul($n1, $n2)
{
    echo $n1 * $n2;
}

function div($n1, $n2)
{
    if ($n2 == 0) {
        throw new Exception("Denominator cann't be zero");
    }
    echo $n1 + $n2;
}
?>