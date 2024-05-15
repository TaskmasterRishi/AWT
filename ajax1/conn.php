<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ajaxcrud";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if (mysqli_connect_errno()) {
        echo"". mysqli_connect_error();
        exit();
    }
?>