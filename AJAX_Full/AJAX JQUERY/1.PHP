<html> 
<head>
<title>Submit Form Using AJAX and jQuery</title>
<script src="jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<script>
$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var email = $("#email").val();
var password = $("#password").val();
var contact = $("#contact").val();


if(name==''||email==''||password==''||contact=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",url: "ajaxsubmit.php",
data: 'name1='+ name + '&email1='+ email + '&password1='+ password + '&contact1='+ contact,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});


</script>
</head>
<body>
<div id="mainform">
<h2>Submit Form Using AJAX and jQuery</h2> 
<div id="form">
<h3>Fill Your Information !</h3>
<div>
<label>Name :</label>
<input id="name" type="text">
<label>Email :</label>
<input id="email" type="text">
<label>Password :</label>
<input id="password" type="password">
<label>Contact No :</label>
<input id="contact" type="text">
<input id="submit" type="submit" value="Submit">
</div>
</div>
</div>
</body>
</html>