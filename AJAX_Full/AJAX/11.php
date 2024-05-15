<!DOCTYPE html>
<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css">
<script>


function checkForm() { 
// Fetching values from all input fields and storing them in variables.
var name = document.getElementById("username1").value;
var password = document.getElementById("password1").value;
var email = document.getElementById("email1").value;
var mob = document.getElementById("mob1").value;
//Check input Fields Should not be blanks.
if (name == '' || password == '' || email == '' || mob == '') {
alert("Fill All Fields");
} 


else {
//Notifying error fields 
var user1 = document.getElementById("username").innerHTML;
var pass1 = document.getElementById("password").innerHTML;
var email1 = document.getElementById("email").innerHTML;
var mob1 = document.getElementById("mob").innerHTML;
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (username1== 'Username is already registred' || password1 == 'Password too short' || email1 == 'Invalid email' || mob1 == 'Invalid mob' || email1=="Email is already registred" || mob1 == 'mobile is already registred') {
alert("Please enter Valid Information");
} else {
//Submit Form When All values are valid.
document.getElementById("myForm").submit();
}
}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 ) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation2.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}

</script>




</head>
<body>
<div id="mainform">
<div class="innerdiv">
<!-- Required Div Starts Here -->
<h2>Registraion and Login Using AJAX</h2>
<form action='#' id="myForm" method='post' name="myForm">
<h3>Register Here</h3>
<table>
<tr>
<td>Username</td>
<td><input id='username1' name='username1' onblur="validate('username', this.value)" type='text'></td>
<td>
<div id='username'></div>
</td>
</tr>
<tr>
<td>Password</td>
<td><input id='password1' name='password1' onblur="validate('password', this.value)" type='password'></td>
<td>
<div id='password'></div>
</td>
</tr>
<tr>
<td>Email</td>
<td><input id='email1' name='email1' onblur="validate('email', this.value)" type='text'></td>
<td>
<div id='email'></div>
</td>
</tr>
<tr>
<td>mobile</td>
<td><input id='mob1' name='mob1' onblur="validate('mob', this.value)" type='text'></td>
<td>
<div id='mob'></div>
</td>
</tr>
</table>
<input onclick="checkForm()" type='button' value='Register Here'>
</form>
</div>
</body>
</html>







