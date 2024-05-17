<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uploadFile_info.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_error = $_FILES['file']['error'];
        $file_type = $_FILES['file']['type'];

        echo "File Name: ".$file_name;
        echo "<br>";
        echo "File Type: ".$file_type;
        echo "<br>";
        echo "File Size: ".$file_size;
        echo "<br>";
        echo "File Error: ".$file_error;
        echo "<br>";
        echo "File path: ".realpath($file_name);
        echo "<br>";
    }
    ?>    
</body>
</html>