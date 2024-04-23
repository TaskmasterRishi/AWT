<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr>
                <td><label for="number1">Number one :</label></td>
                <td><input type="number" name="number1" id="number1" required></td>
            </tr>
            <tr>
                <td><label for="number2">Number two :</label></td>
                <td><input type="number" name="number2" id="number2" required></td>
            </tr>
            <tr>
                <td><label for="operations">Operations :</label></td>
                <td>
                    <select name="operations" id="operations">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="/">/</option>
                            <option value="*">*</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" value="Submit">Submit</button>
        <button type="reset" value="reset">Reset</button>
    </form>
</body>
</html>

<?php 
function calculate($num1, $num2, $operation) {
    switch($operation){
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '/':
            if($num2 == 0){
                return "Cannot divide by zero";
            }
            return $num1 / $num2;
        case '*':
            return $num1 * $num2;
        default:
            return "Invalid operation";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $operation = $_POST["operations"];

    $result = calculate($num1, $num2, $operation);
    echo "Answer is $result";
}
?>
