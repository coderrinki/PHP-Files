<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="url" >
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
    $url=$_POST['url'];
    $info=parse_url($url);
    print_r($info);
    }
    ?>
</body>
</html>