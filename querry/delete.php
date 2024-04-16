<?php
include_once("connect.php");
$result="SELECT * FROM user";
$querry=mysqli_query($conn,$result);
$id=$_GET['y'];
$sql="DELETE FROM user where id=$id";
if(mysqli_query($conn,$sql)){
    echo "<p>information deleted successfully<p>";
    echo "<a href='table.php'>Data</a>";
}
?>