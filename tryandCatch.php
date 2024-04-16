<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p>Enter a number greater than 1</p>
        <input type="number" name="num" id="num">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    try{
        if($num < 0){
            throw new Exception("Value should be greater than 0");
        }
        if($num < 1){
            throw new Exception("value should be greater than 1");
        }
        echo "number is greater than or equall to 1";
    }
    catch(Exception $e){
        echo 'Message: ' .$e->getMessage();
    }
}
?>