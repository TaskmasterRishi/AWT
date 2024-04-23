    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Submission</title>
    </head>
    <body>
        <?php
            // Check if the 'name' and 'email' parameters exist in the URL
            if(isset($_GET['name']) && isset($_GET['email'])) {
                $name = $_GET['name'];
                $email = $_GET['email'];
                echo "Hello, $name! Your email is $email.";
            } else {
                echo "Please provide your name and email in the URL.";
            }
        ?>
        <form action="#" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
    </html>
