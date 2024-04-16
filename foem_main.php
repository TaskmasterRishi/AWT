<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Form</title>
</head>
<body>
    <center>
        <h1>Student Registration Form</h1>
        <form method="post" name="userdetails" onsubmit="return processForm()" action="form.php">
            <table>
                <tr>
                    <td>
                        <label for="Username">Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="Username" required placeholder="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" required placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="conform_password">Conform Password</label>
                    </td>
                    <td>
                        <input type="password" name="conform_password" id="conform_password" required
                            placeholder="Conform Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Gender">Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" id="male" value="Male" required> Male
                        <input type="radio" name="gender" id="female" value="Femdale" required> Female
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="country">Country</label>
                    </td>
                    <td>
                        <select name="country" id="country">
                            <option value="India">India</option>
                            <option value="China">China</option>
                            <option value="Japan">Japan</option>
                            <option value="England">England</option>
                            <option value="Africa">Africa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mobile">Mobile Number</label>
                    </td>
                    <td>
                        <input type="tel" name="mobile" id="mobile" required placeholder="0000000000" pattern="[0-9]{10}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <textarea id="address" name="address" required placeholder="Address"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email_id">Email ID</label>
                    </td>
                    <td>
                        <input type="email" name="email_id" id="email_id" required placeholder="Email ID">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="student_id">Student ID</label>
                    </td>
                    <td>
                        <input type="number" name="student_id" id="student_id" required placeholder="Student ID"
                            pattern="0-9">
                    </td>
                </tr>
            </table>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </center>
</body>
<script src="form.js"></script>
</html>