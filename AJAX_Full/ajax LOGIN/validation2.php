<?php 
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
$con=mysqli_connect("localhost","root","","test2");
 
$sql="SELECT * from userpass WHERE username='$value'";
$re=mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($re);
if ($rowcount > 0) {
echo"Username is already registred";
}
elseif (strlen($value) < 3) {
echo "Enter username";
}

 else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
if (strlen($value) < 6) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
$con=mysqli_connect("localhost","root","","test2");
$sql="SELECT * from userpass WHERE email='$value'";
$re=mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($re);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
}

else if  ($rowcount > 0)
 {
echo"Email is already registred";
}

else{
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid mob address when user enters mob address in mob input field.
if ($formfield == "mob") {

$con=mysqli_connect("localhost","root","","test2");
$sql="SELECT * from userpass WHERE mobile='$value'";
$re=mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($re);
if (!preg_match("/^[0-9]{10}$/", $value)) {
echo "Invalid mobile";
} 

else if  ($rowcount > 0)
 {
echo"mobile is already registred";
}

else {
echo "<span>Valid</span>";
}
}
?>