<?php 
    $user_name = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $email = $_POST["email_id"];
    $student_id = $_POST["student_id"];

    echo"
    <center>
    <table>
        <tr>
            <td>Your Name</td>
            <td>$user_name</td>
        </tr>
        <tr>
            <td>Your roll no is</td>
            <td>$student_id</td>
        </tr>
        <tr>
            <td>Your Password</td>
            <td>$password</td>
        </tr>  
        <tr>
            <td>Your Gender</td>
            <td>$gender</td>
        </tr>
        <tr>
            <td>Your Country</td>
            <td>$country</td>
        </tr>
        <tr>
            <td>Your mobile Number</td>
            <td>$mobile</td>
        </tr>
        <tr>
            <td>Your Address</td>
            <td>$address</td>
        </tr>
        <tr>
            <td>Your Email</td>
            <td>$email</td>
        </tr>
    </table>
    </center>
    ";

?>

<style>
    table{
        font-family : 'Lucida Sans';
        background-color : whitesmoke;
        border-radius : 10px;
    }
    td {
        padding : 1.1rem;
    }
</style>
