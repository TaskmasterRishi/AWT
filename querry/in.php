<?php
include_once("connect.php");
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$sql="INSERT INTO user(name,age,email) VALUES ('$name','$age','$email')";
if(mysqli_query($conn,$sql)){
    echo "<p>information added successfully<p>";
    echo "<a href='table.php'>Data</a>";
}
else{
    echo "HAVING AN ERROR ENTER AGAIN";
    echo "<a href='f.html'>Form</a>";
}
?>