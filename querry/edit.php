<?php
include_once("connect.php");
$result="SELECT * FROM user";
$querry=mysqli_query($conn,$result);
$id=$_GET['x'];
$sql="SELECT * FROM user WHERE id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
?>
<html>
    <body>
        <center>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $row['name'] ?>" required></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age" value="<?php echo $row['age'] ?> " required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="emal" name="email" value="<?php echo $row['email'] ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="submit" name="submt"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>