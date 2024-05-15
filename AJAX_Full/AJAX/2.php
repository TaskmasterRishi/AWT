<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<p id="demo">Plese change the text. Load from ajax.txt</p>

<input type="button" value="Change Content" onclick="loadDoc()">

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "ajax.txt", true);
  xhttp.send();
}
</script>

</body>
</html>