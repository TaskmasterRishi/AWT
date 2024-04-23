<html>
    <body>
        <h2>Require() function</h2>
        <form method="post">
            Enter number 1: <input type="number" name="val1"><br>
            Enter number 2: <input type="number" name="val2"><br> 
            <input type="submit" name="generate" value="generate">
        </form>
    </body>
</html>
<?php

if(isset($_POST['generate']))
{
    $a=$_POST['val1'];
    $b=$_POST['val2'];

    $c=$a*$b;

    echo "Multiplication of two numbers: $c";
}
?>
