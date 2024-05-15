<?php  
$q = $_GET['q'];

//get content of textfile
$filename = "name.txt";
$content = file($filename);

//put content in array
$a = explode(",", $content[0]);


$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;




?>
