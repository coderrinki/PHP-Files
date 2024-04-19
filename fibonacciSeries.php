
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="fibonacciSeries.php" method="post">
        <input type="number" name="fibnumber" placeholder="Enter a number">
        <input type="submit" name="submit" value="Submit">
    </form> -->
    <?php
$num = $_POST['fibnumber'];
$a=0;
$b=1;
echo "Fibonacci series : ";
if($num>1){
    for($i=0;$i<$num;$i++){
        $c=$a+$b;
        $a=$b;
        $b=$c;
        echo $c." ";
    }
}
else{

echo $num;
}
?>
</body>
</html>