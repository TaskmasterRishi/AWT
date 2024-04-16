<?php
include_once("connect.php");
$result="SELECT * FROM user";
$querry=mysqli_query($conn,$result);
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$sql="UPDATE user SET name='$name', age='$age', email='$email' WHERE id=$id";
if(mysqli_query($conn,$sql)){
    echo "<p>information updated successfully<p>";
    echo "<a href='table.php'>Data</a>";
}
else{
    echo "HAVING AN ERROR ENTER AGAIN";
    echo "<a href='edit.php'>Form</a>";
}
?>
