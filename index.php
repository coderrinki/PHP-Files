<?php
echo "hello world";//print hello world
echo "<br>................................";
//area of circle
$r=4;
$area=3.14*$r*$r;
echo "<br>Area of the circle is: ".$area;
echo "<br>................................";
//area of rectangle
$length=10.3;
$width=5.5;
$area=$length*$width;
echo "<br>Area of rectangle: ".$area;
echo "<br>................................";
//area of triangle
$length=8.2;
$width=6.5;
$area=($length*$width)/2;
echo "<br>Area of triangle: ".$area;
echo "<br>................................";
//area of square
$side=4.7;
$area=$side*$side;
echo "<br>Area of Square: ".$area;
echo "<br>................................";
//Power of a number
//$a = (int)readline("Enter the number: ");
//echo "the integer: ".$a;
$a=7;
echo "<br>Enter the number: ".$a;
$power=3;
echo "<br>Enter the power: ".$power;
$result=pow($a,$power);
echo "<br>Power of a is: ".$result;
//ever odd find
echo "<br>................................";
$num=14.55;
if($num%2==0){
    echo "<br>The number is even";
}else{
    echo "<br>The number is odd";
}
?>
