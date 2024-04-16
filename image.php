<!DOCTYPE html>
<html>

<head>
    <title>Uploading...</title>
</head>

<body>
    <h1>Uploading File...</h1>

    <form method="post" enctype="multipart/form-data">
        <label for="file">Select file:</label><br>
        <input type="file" id="file" name="the_file"><br><br>
        <input type="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset ($_FILES['the_file'])) {
        if ($_FILES['the_file']['error'] > 0) {
            echo 'Problem: ';
            switch ($_FILES['the_file']['error']) {
                case 1:
                    echo 'File exceeded upload_max_filesize.';
                    break;
                case 2:
                    echo 'File exceeded max_file_size.';
                    break;
                case 3:
                    echo 'File only partially uploaded.';
                    break;
                case 4:
                    echo 'No file uploaded.';
                    break;
                case 6:
                    echo 'Cannot upload file: No temp directory specified.';
                    break;
                case 7:
                    echo 'Upload failed: Cannot write to disk.';
                    break;
                case 8:
                    echo 'A PHP extension blocked the file upload.';
                    break;
            }
            exit;
        }

        $allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
        if (!in_array($_FILES['the_file']['type'], $allowed_types)) {
            echo 'Problem: file is not a supported image type.';
            exit;
        }

        // Define the directory to save the uploaded file (use default temporary directory)
        $upload_directory = sys_get_temp_dir() . '/';

        // Generate a unique filename to prevent overwriting existing files
        $unique_filename = uniqid() . '_' . $_FILES['the_file']['name'];

        // Put the file where we'd like it
        $uploaded_file = $upload_directory . $unique_filename;

        if (move_uploaded_file($_FILES['the_file']['tmp_name'], $uploaded_file)) {
            echo 'File uploaded successfully.';
            // Show what was uploaded
            echo '<p>You uploaded the following image:<br/>';
            echo '<img src="' . $uploaded_file . '"/>';


        } else {
            echo 'Problem: Could not move file to destination directory.';
            exit;
        }
    } else {
        echo 'No file uploaded.';
    }
    ?>
</body>

</html>