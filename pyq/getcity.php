<?php
$mysqli = new mysqli("localhost:3307", "root", "", "user");
if ($mysqli->connect_error) {
    exit('Could not connect');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $city = $_POST['city'];

    $sql = "SELECT * FROM `cityname` WHERE `customerid` = ?;";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_GET['q']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($cityname, $temp, $date, $population, $capital, $currency);
    $stmt->fetch();
    $stmt->close();
    
    echo "<table>";
    echo "<tr>";
    echo "<th>City name</th>";
    echo "<td>" . $cityname . "</td>";
    echo "<th>temperature</th>";
    echo "<td>" . $temp . "</td>";
    echo "<th>Date and time</th>";
    echo "<td>" . $date . "</td>";
    echo "<th>Population</th>";
    echo "<td>" . $population . "</td>";
    echo "<th>Capital</th>";
    echo "<td>" . $capital . "</td>";
    echo "<th>Currency</th>";
    echo "<td>" . $currency . "</td>";
    echo "</tr>";
    echo "</table>";
}
?>