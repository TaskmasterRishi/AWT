
<html>
<head> <script src="drop.js"></script>



<script>
		$(function() {
		
			
			$("#ugpg").change(function() {
				$("#text-one").load("text/ugpg/" + $(this).val() + ".txt");
			});
			
			$("#text-one").change(function() {
				$("#text-two").load("text/" + $(this).val() + ".txt");
			});
			
			$("#text-one").change(function() {
				$("#text-three").load("text/type/" + $(this).val() + ".txt");
			});
			
			
		});
	</script>
</head>	
	<body>
	
	<h1 align="center">STUDENT REGISTRATION FORM</h1> <br />

  
<table align="center" cellpadding = "0" cellspacing="5">
 
 
 <tr> 
<td><br />TYPE OF COURSE:  <br /></td> 
<td>
<br /><select style="width:250PX;" name="ugpg" id="ugpg" >
<option selected="" value="Default" >Select Course</option> 
  <option value="UG" >UG Programme</option>
  <option value="PG" >PG Programme</option>
  <option value="PDDC">PDDC</option>
</select> <span>*</span> </td>
</tr> 

 
 
 
 
<tr> 
<td>TYPE OF PROGRAMME:  <br /></td> 
<td>



<select style="width:250PX;" name="type" id="text-one"  >
<option selected="" value="Default" >Select Department Type</option> 
  

</select> <span>*</span></td>
</tr> 

	
<tr> 
<td>ADMITTED BRANCH: <br/></td> 
<td>


<select style="width:250PX;" name="branch" id="text-two">
<option value="Default" >Select Branch</option> 
</select> <span>*</span>


 <br/></td>   
</tr> 
 
<tr>
<td>STUDENT TYPE: <br /></td>
<td>

<select style="width:250PX;" name="stutype" id="text-three">
<option  value="Default" >Select Type</option> 


<br />
</td>
</tr>

</table>
</html>

<!-- Basic syntax is: $(selector).action() A dollar sign to define jQuery A (selector) to "query (or find)" HTML elements A jQuery action() to be performed on the element(s) -->
