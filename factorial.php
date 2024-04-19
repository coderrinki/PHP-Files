<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="phpcont">
<?php
$num = $_POST["number"];
$fact =1;
for($i=1;$i<=$num;$i++){
    $fact=$fact*$i;
}
echo "Factorial of ".$num." is ".$fact;

?>
</div>
</body>
</html>
