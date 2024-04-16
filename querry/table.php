<?php
include_once("connect.php");
echo "<a href='f.html'>Add Data</a>";
$result="SELECT * FROM user";
$querry=mysqli_query($conn,$result);

?>
<html>
    <body>
        <h1>Record</h1>
        <table border="2">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>AGE</td>
                <td>EMAIL</td>
                <td>UPDATE</td>
                <?php
              
                while($res=mysqli_fetch_array($querry)){
                    $id=$res['id'];
                    $name=$res['name'];
                    $age=$res['age'];
                    $email=$res['email'];
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo  "<td>$name</td>";
                    echo  "<td>$age</td>";
                    echo "<td>$email</td>";
                    echo "<td><a href='edit.php?x=$id'>Edit</a>|<a href='delete.php?y=$id'>Delete</a></td>";
                    echo"</tr>";
                }
                ?>
</tr>
</table>
</body>
</html>