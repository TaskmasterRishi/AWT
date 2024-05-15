<html> 
   <head>
   
      <script>
         function showCD(str) {
            if (str == "") {
               document.getElementById("txtHint").innerHTML = "";
               return;
            }
            
               xmlhttp = new XMLHttpRequest()
            xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
               }
            }
            xmlhttp.open("GET","getcourse.php?q="+str,true);
            xmlhttp.send();
         }
      </script>
   
   </head>
   <body>
      
      <form>
         Select a Course:
         <select name = "cds" onchange = "showCD(this.value)">
            <option value = "">Select a course:</option>
            <option value = "Android">Android </option>
            <option value = "Html">HTML</option>
            <option value = "Java">Java</option>
            <option value = "Microsoft">MS technologies</option>
         </select>
      </form>
      
      <div id = "txtHint"><b>Course info will be listed here...</b></div>
      
   </body>
</html>