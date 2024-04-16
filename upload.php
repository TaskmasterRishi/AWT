<!DOCTYPE html>
<html lang="en">

<?php
$conn = mysqli_connect("localhost", "root", "", "Full_Form")
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Uplaod image :
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset ($_FILES['file'])) {
        // $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        if ($fileError === UPLOAD_ERR_OK) {
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $allowed = array('jpeg', 'jpg', 'png', 'pdf');

            if (in_array($fileExt, $allowed)) {
                if ($fileSize < 10000000) {
                    $fileNameNew = uniqid('', true) . "." . $fileExt;
                    $fileDestination = '/opt/lampp/htdocs/awt/' . $fileNameNew;

                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        // header("Location: upload.html?uploadsuccess");
                        echo '<p>You uploaded the following image:<br/>';
                        $sql = "INSERT INTO image (imagename) VALUES ('$fileNameNew')";
                        if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }

                        $result = mysqli_query($conn, "SELECT * FROM image");
                        while ($data = mysqli_fetch_array($result)) {
                            echo '<img src="' . $data["imagename"] . '"/>';
                        }
                        echo '"<h2>File Download</h2><br>
                                <a href="' . $fileNameNew . '" download>Download</a>';
                        exit();
                    } else {
                        echo "Error occurred while uploading the file.";
                    }
                } else {
                    echo "File is too large.";
                }
            } else {
                echo "Wrong file extension.";
            }
        } else {
            echo "Error occurred during file upload.";
        }
    } else {
        echo "No file selected.";
    }
}
?>