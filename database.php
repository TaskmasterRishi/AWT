<?php
$con = mysqli_connect("localhost", "root", "", "Form_data_Base");
if (!$con) {
    echo "Data Base not Connected <br>";
} else {
    echo "Data Base connected <br>";
}

$name = $_POST["user_name"];
$gender = $_POST["gender"];
$enrollmentNo = $_POST["enrollment"];
$branch = $_POST["branch"];
$address = $_POST["address"];
//$x = $_POST["hobbie"];
//$hobbies = "";

// echo $name;
 
/* foreach ($x as $y) {
    $hobbies .= $y . ", ";
} */
// //$hobbies = rtrim($hobbies, ", ");

$sql = "INSERT INTO user_data (userName,gender,enrollmentNo,branch,Adress) VALUES ('$name','$gender','$enrollmentNo','$branch','$address')";

if(mysqli_query($con,$sql)) 
{
    echo "New record created successfully";

  } else {
    echo "Error:<br>" . mysqli_error($con);

  }

?>