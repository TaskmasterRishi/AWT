<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['submit']))
        {
        $file=$_FILES['file'];
        $filename=$_FILES['file']['name'];
        $filesize=$_FILES['file']['size'];
        $fileerr=$_FILES['file']['error'];
        $filetemp=$_FILES['file']['tmp_name'];
        $filetype=$_FILES['file']['type'];
        $fileext=explode('.' , $filename);
        $fileactuatext=strtolower(end($fileext));
        $allowed=array('jpg','jpeg','png','pdf');
        if(in_array($fileactuatext,$allowed))
        {
            if($fileerr === 0)
            {
                if($filesize < 800000)
                {
                    $filedest='uploads/' . $filename;
                    move_uploaded_file($filetemp,$filedest);
                    header("location: fileupload.php?uploadsucces");
                }
                else{
                    echo "Your file is too big!";
                }
            }
            else{
                echo "There was an Error!";
            }
        }
        else{
            echo "You cannot upload this type of file!";
        }
        }
    }

    ?>
    <form action="fileupload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">upload</button>
    </form>
</body>
</html>