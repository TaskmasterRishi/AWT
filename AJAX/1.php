 
 
 <?php 
 $str1 = 'BVM Engineering College';
$str2 = 'BVM';
if (strpos($str1,$str2) !== false) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
 ?>
 