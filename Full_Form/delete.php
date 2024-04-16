<?php
require("config.php");
$id = $_GET["id"];
$sql = "DELETE FROM users WHERE ID=$id";
if (mysqli_query($con, $sql)) {
    echo "Record Deleted Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
echo "<br>";
echo"<a href=\"index.php\">See update</a>";
?>