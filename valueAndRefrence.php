<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="#" method="post">
        <table>
            <tr>
                <td>Enter value of a</td>
                <td><input type="number" name="a" id=""></td>
            </tr>
            <tr>
                <td>Enter value of b</td>
                <td><input type="number" name="b" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "Value of a = $a and b = $b before swap<br>";

    function swap1(&$x, &$y)
    {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    swap1($a, $b);
    echo "Value of a = $a and b = $b after swap(callbyreference)<br>";

    function swap2($x, $y)
    {
        $temp = $x;
        $x = $y;
        $y = $temp;
        echo "Value of a = $x and b = $y after swap(callbyvalue)<br>";
    }
    swap2($a, $b);
}

?>
