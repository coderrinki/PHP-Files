<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Mathematical Calculater";
    $num1= $_POST['num1'];
    $num2= $_POST[ 'num2'];
    $result= $_POST['operation'];
    switch($result){
        case "addition":
            $result= $num1 + $num2;
            echo "<br>Addition of two number is: ".$result;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            echo "<br>Subtraction of two number is: ".$result;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            echo "<br>Multiplication of two number is: ".$result;
            break;
        case "division":
            $result = $num1 / $num2;
            echo "<br>Division of two number is: ".$result;
        break;
    }

    
    ?>
</body>
</html>
