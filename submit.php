<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: pink;
        }
        .phpcont{
            background-color:beige;
            display:flex;
            justify-content:center
        }
    </style>
</head>
<body>
    <div class="phpcont">
   <h1>Welcome</h1>
    <h3>
        <?php
         echo "<br><br>".$_POST['firstname']."<br>";
         echo "<br>................................................................................";
         echo "<br>****************************************";
         echo "<br>".$_POST['number']."<br>";
         echo "<br>................................................................................";
         echo "<br>****************************************";
         $num= $_POST['OE_number'];
if($num%2==0){
    echo "<br>The number is even";
}else{
    echo "<br>The number is odd";
}
echo "<br>................................................................................";
echo "<br>****************************************";
// biggest number among three numbers: 
$num1= $_POST['biggest_number'];
$num2= $_POST['biggest_number1'];
$num3= $_POST['biggest_number2'];
echo "<br>Enter the first number: ".$num1;
echo "<br>Enter the second number: ".$num2;
echo "<br>Enter the third number: ".$num3;
if ($num1>$num2 && $num1>$num3) {
    echo "<br><br>First number is greater.".$num1;
}
elseif ($num2>$num3 && $num2>$num1) {
    echo  "<br><br>Second number is greater.".$num2;
} 
else{
        echo "<br><br>Third number is greater.".$num3;
    }

echo "<br>................................................................................";
echo "<br>****************************************";

$n3= $_POST['number1'];
$n4= $_POST['number2'];
//Swap between two numbers: 

echo "<br> Before swapping: ";
echo "<br>a=".$n3;
echo "<br>b=".$n4;

//using third variable: 

// $temp=$n3;
// $n3=$n4;
// $n4=$temp;

//using +,- operator: 

$n3 = $n3 + $n4;
$n4 = $n3 - $n4;
$n3 = $n3- $n4;
echo "<br>After swapping: ";
echo "<br>a=".$n3;
echo "<br>b=".$n4;
         ?>
         </h3>
         </div>
        </body>
</html>