<?php
// echo "hello world";//print hello world
// echo "<br>................................";
// //area of circle
// $r=4;
// $area=3.14*$r*$r;
// echo "<br>Area of the circle is: ".$area;
// echo "<br>................................";
// //area of rectangle
// $length=10.3;
// $width=5.5;
// $area=$length*$width;
// echo "<br>Area of rectangle: ".$area;
// echo "<br>................................";
// //area of triangle
// $length=8.2;
// $width=6.5;
// $area=($length*$width)/2;
// echo "<br>Area of triangle: ".$area;
// echo "<br>................................";
// //area of square
// $side=4.7;
// $area=$side*$side;
// echo "<br>Area of Square: ".$area;
// echo "<br>................................";
// //Power of a number
// //$a = (int)readline("Enter the number: ");
// //echo "the integer: ".$a;
// $a=7;
// echo "<br>Enter the number: ".$a;
// $power=3;
// echo "<br>Enter the power: ".$power;
// $result=pow($a,$power);
// echo "<br>Power of a is: ".$result;
// //ever odd find
// echo "<br>................................";
// $num=14.55;
// if($num%2==0){
//     echo "<br>The number is even";
// }else{
//     echo "<br>The number is odd";
// }

// $num1=13.2;
// $num2=13.89;
// $num3=13.56;
// echo "<br><br>Enter the first number: ".$num1;
// echo "<br><br>Enter the second number: ".$num2;
// echo "<br><br>Enter the third number: ".$num3;
// if ($num1>$num2 && $num1>$num3) {
//     echo "<br><br>First number is greater.".$num1;
// }
// elseif ($num2>$num3 && $num2>$num1) {
//     echo  "<br><br>Second number is greater.".$num2;
// } 
// else{
//         echo "<br><br>Third number is greater.".$num3;
//     }

// //greater number find using ternary operater
// $n1=5;
// $n2=7;
// echo ($n1>$n2) ? "<br><br>$n1 is greater":"<br><br>$n2 is greater";

// //Swap between two numbers: 

// $n3=5;
// $n4=7;
// $temp;  
// echo "<br>a=".$n3;
// echo "<br>b=".$n4;

// //using third variable: 

// $temp=$n3;
// $n3=$n4;
// $n4=$temp;

// //using +,- operator: 

// $n3 = $n3 + $n4;
// $n4 = $n3 - $n4;
// $n3 = $n3- $n4;
// echo "<br>After swapping ";
// echo "<br>a=".$n3;
// echo "<br>b=".$n4;


//Multiplication Table: 

$n5=6;
echo "<br>The Multiplication table  of " .$n5. "is: <br>";
for ($i=1; $i<=10 ; $i++) { 
    $result= $n5 ." x ". $i. " =  ". $n5*$i."<br>";
    echo  $result;
}


?>
