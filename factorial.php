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
                <td><label for="number">Enter Number :</td>
                <td><input type="number" name="number" id="number" required></td>
            </tr>
        </table>
        <button type="Submit" value="Submit">Submit</button>
        <button type="reset" value="reset">Reset</button>
    </form>
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num = $_POST["number"];
    $ans = 1;
    while($num > 0){
        $ans = $ans * $num;
        $num--;
    }
    echo "Answer is $ans";
}
?>