<html> 
<head>
<title>Ajax Image Upload Using PHP and jQuery</title>
<link rel="stylesheet" href="style1.css" />

<script src="jquery.min.js"></script>
<script>
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "ajax_php_file.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#message").html(data);
}
});
}));

// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];

var match= ["image/jpeg","image/png","image/jpg"];
if(!((file.type==match[0]) || (file.type==match[1]) || (file.type==match[2])))
{
$('#previewing').attr('alt','fgsddsfdfdfdsfs');
$("#message").html("<p id='error'>Please Select A valid Image File</p> <br> Only jpeg, jpg and png Images type allowed");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '200px');
$('#previewing').attr('height', '180px');
};
});
</script>
</head>
<body>
<div class="main">
<h1>Ajax Image Upload</h1><br/>
<hr>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div id="image_preview"><img id="previewing" src="a.png" alt="no image" /></div>
<hr id="line">
<div id="selectImage">
<label>Select Your Image</label><br/>
<input type="file" name="file" id="file" required />
<input type="submit" value="Upload" class="submit" />
</div>
</form>
</div>
<h4 id='loading' >loading..</h4>
<div id="message"></div>
</body>
</html>