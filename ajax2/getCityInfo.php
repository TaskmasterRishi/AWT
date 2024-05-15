<?php
$conn = mysqli_connect("localhost", "root", "", "ajaxcrud");

if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit(1);
}

if (isset($_POST["city"])) {
    $city = $_POST["city"];
    $sql = "SELECT * FROM city_info WHERE city_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $city);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        echo "
        <p>Temperature: ".$row['temprature']."</p>
        <p>Date and Time: ".$row['Date_time']."</p>
        <p>Population: ".$row['population']."</p>
        <p>Capital: ".$row['capital']."</p>
        <p>Currency: ".$row['currency']."</p>
        "; 
    } else {
        echo "<p>No results found</p>";
    }

    $stmt->close();
}

mysqli_close($conn);
?>
