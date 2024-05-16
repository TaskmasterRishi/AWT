<?php
// Connect to the database
$conn = mysqli_connect("localhost:3307", "root", "", "EXAM");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS employee ( employee_id INT PRIMARY KEY, name VARCHAR(255), city VARCHAR(255) );";


$sql1 = "CREATE TABLE IF NOT EXISTS company ( c_id INT PRIMARY KEY, c_name VARCHAR(255), c_address VARCHAR(255) );";

$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

if($result && $result1)
{
    // write code for entering value into the table
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST["company_name"];

    // Query the database to get the employee details for the company
    $sql = "SELECT e.employee_id, e.name, e.city
            FROM employee e
            JOIN company c ON e.city = c.c_address
            WHERE c.c_name = '$company_name'";
    $result = mysqli_query($conn, $sql);

    // Display the employee details
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>City</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>". $row["employee_id"]. "</td>
                <td>". $row["name"]. "</td>
                <td>". $row["city"]. "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "No employees found for company '$company_name'";
    }
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Company name</h2>
<form action='#' method='post'>
    <input type="text" name="company_name" id="">
    <input type="submit" value="Search">
</form>
</body>
</html>