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
                <td><lable for="number2">Number two :</td>
                <td><input type="number" name="number2" id="number2" require></td>
            </tr>
            <tr>
                <td><lable for="operations">Operations :</td>
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
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $ans;
    $operation = $_POST["operations"];

    if($num2 == 0){
        trigger_error("Cannot divide by zero", E_USER_ERROR);
    }
    switch($operation){
        case '+':
            $ans = $num1 + $num2;
            break;
        case '-':
            $ans = $num1 - $num2;
            break;
        case '/':
            $ans = $num1 / $num2;
            break;
        case '*':
            $ans = $num1 * $num2;
            break;
    }
    echo "Answer is $ans";
}
?>