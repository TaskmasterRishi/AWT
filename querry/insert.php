<?php
$conn= mysqli_connect("localhost","root","","22it450");
//   if(mysqli_connect_error()){
//     echo "error". mysqli_connect_error();
//  }
// else{
//     echo "superb";
// }
$name=$_POST['name'];
$s_id=$_POST['stu_id'];
$e_id=$_POST['enroll_id'];
$mob=$_POST['mob_no'];
$gender=$_POST['Gender'];
$h=$_POST['hob'];
foreach($h as $hobby){
    $hob.= $hobby .",";
}
$sql="INSERT INTO info(name, student_id ,enrollment_id ,mobile_no,gender ,hobby) VALUES ('$name','$s_id','$e_id','$mob','$gender','$hob')";
if(mysqli_query($conn,$sql)){
    echo "<center><h1>information added successfully</h1></center>";
    echo "<a href='form.html'>Form</a>";
}
else{
    echo "HAVING AN ERROR ENTER AGAIN";
    echo "<a href='form.html'>Form</a>";
}
?>