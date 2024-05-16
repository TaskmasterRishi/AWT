<?php
class Person
{
    const MALE = 'Male';
    const FEMALE = 'Female';

    private $gender;

    public function setGender($gender)
    {
        if ($gender === self::MALE || $gender === self::FEMALE) {
            $this->gender = $gender;
        } else {
            throw new Exception("InValid Gender");
        }
    }

    public function getGender()
    {
        return $this->gender;
    }
}

$person = new Person();

// Get user input from a textbox
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $genderInput = $_POST['gender'];

    $person->setGender($genderInput);

    $gender = $person->getGender();

    // Print the gender
    echo "Gender: $gender";

   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="q3.php" method="post">
        <p>Plz enter your gender</p>
        <select name="gender" id="">
            <option value="Male">Select our Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <input type="submit" value="Submit">
        </select>
    </form>
</body>

</html>