<html>
    <body>
        <h2>include() function</h2>
        <form method="post">
            Enter Name: <input type="text" name="fn"><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $a=$_POST['fn'];

    echo "Heyyy<br>";
    echo "Welcome $a to our webpage";
}
?>
