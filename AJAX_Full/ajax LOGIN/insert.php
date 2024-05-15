<?php  
$connection = mysql_connect("localhost", "root", "",); // Establishing Connection with Server..
$db = mysql_select_db("mydba", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_GET['name1'];
$email2=$_GET['email1'];
$password2=$_GET['password1'];
$contact2=$_GET['contact1'];
//Insert query
$query = mysql_query("insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')");
echo "Form Submitted Succesfully";

$subject = "Please Check Your password";
$txt = "Hello , $name2 !<br> You are registered with xyz website. Your mobile no is is <b> $contact2 </b> <br> Thank you
          Thank you...<br /> <br />
          Regards,<br /> Admin ,Management System  <br />";
$headers = 'From: donnotreply@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';  

if(mail($email2, $subject, $txt, $headers))
{
   
}
mysql_close($connection); // Connection Closed
?>