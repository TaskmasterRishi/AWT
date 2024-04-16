<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<?php
include("config.php");
$result = mysqli_query($con, "SELECT * FROM users");
?>

<body>
    <a href="insert.php">Add new data</a>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Age</td>
            <td>E-mail</td>
            <td>Update</td>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $data["ID"] . "</td>";
            echo "<td>" . $data["userName"] . "</td>";
            echo "<td>" . $data["age"] . "</td>";
            echo "<td>" . $data["email"] . "</td>";
            echo "<td> <a href=\"edit.php?id=$data[ID]\">Update</a> | <button onclick=\"deleteData(" . $data['ID'] . ")\">Delete</button></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
<script>
    function deleteData(id) {
        if (confirm("Are you sure, You want to delete Data")) {
            var deleteUrl = "delete.php?id=" + id;
            document.location.href = deleteUrl;
        }
    }
</script>

</html>
