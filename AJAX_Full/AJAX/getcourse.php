<?php
   $q = $_GET["q"];
   
   $xmlDoc = new DOMDocument();
   $xmlDoc->load("catalog.xml");
   
   $x = $xmlDoc->getElementsByTagName('COURSE');
   
   for ($i = 0; $i<=$x->length-1; $i++) {
      
      if ($x->item($i)->nodeType == 1) {
         if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
            $y = ($x->item($i)->parentNode);
         }
      }
   }
	
   $cd = ($y->childNodes);
   
   for ($i = 0;$i<$cd->length;$i++) {
      if ($cd->item($i)->nodeType == 1) {
         echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
         echo($cd->item($i)->childNodes->item(0)->nodeValue);
         echo("<br>");
      }
   }
   
   
   
   
   
   
 //The nodeType property returns the node type, as a number, of the specified node.

//If the node is an element node, the nodeType property will return 1.

//If the node is an attribute node, the nodeType property will return 2.

//If the node is a text node, the nodeType property will return 3.

//If the node is a comment node, the nodeType property will return 8.


   
   
   
   
?>