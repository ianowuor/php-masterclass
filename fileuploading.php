<?php
    if (isset($_POST['submit'])) {
        $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');

        if (!empty($_FILES['upload']['name'])) {
            // print_r($_FILES);
            $filename = $_FILES['upload']['name'];
            $filesize = $_FILES['upload']['size'];
            $filetmp = $_FILES['upload']['tmp_name'];
            $target_dir = 'uploads/' . $filename;

            // Get file extension

            $file_ext = explode('.', $filename);
            $file_ext = strtolower(end($file_ext));

            // Validate File extension

            if (in_array($file_ext, $allowed_extensions)) {
                if ($filesize <= 1000000) {
                    move_uploaded_file($filetmp, $target_dir);
                    $message = '<p style="color: green;">File uploaded</p>';
                } else {
                    $message = '<p style="color: red;">File is too large</p>';

                }
            } else {
                $message = '<p style="color: red;">Invalid file type</p>';
            }
        } else {
            $message = '<p style="color: red;">Please Choose a File</p>';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <?php 
            echo $message ?? null;
        ?>
        <form action='
            <?php
                echo $_SERVER['PHP_SELF'];
            ?>
        ' method='POST' enctype='multipart/form-data'>
            Select Image to upload: 
            <input type='file' name='upload'>
            <input type='submit' value='Submit' name='submit'>
        </form>
    </body>
</html>