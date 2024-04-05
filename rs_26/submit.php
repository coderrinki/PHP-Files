<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="phpcont">
        <?php
        echo "<h1>Welcome</h1><br>";
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

echo "<br>................................................................................";
echo "<br>****************************************";

//Greeting Message according to its time;
date_default_timezone_set('Asia/Kolkata');  
$current_time=date('h:i:s');

if($current_time>=12) {
    echo "<br>Good Morning";
} else if ($current_time <=17){
    echo "<br>Good Afternoon";
}else if( $current_time <= 19 ) {
    echo "<br>Good Evening";
}else{
    echo "<br>Good Night";
}

echo "<br>................................................................................";
echo "<br>****************************************";
//vowel check
$vowel=array('a','e', 'i','o','u');
$consonant=array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
$ch=$_POST['text'];
$count=0;
$count1=0;
$cont='';
$cont1='';
for($i=0; $i<strlen($ch); $i++){
    if (in_array($ch[$i], $vowel)) {
        $count++;
        $cont = $cont." ".$ch[$i];
    }
    else if(in_array($ch[$i], $consonant)){
        $count1++;
        $cont1 = $cont1." ".$ch[$i];
    }
}
echo "<br> The number of vowels are: ".$count;
echo "<br> The vowels are: ".$cont;
echo "<br> The number of consonant are: ".$count1;
echo "<br> The consonants are: ".$cont1;










      $num= $_POST['unit'];
      $totalbill=0;
     if($num <=50){
        $totalbill= $num * 3.50;
        echo "<br>Total amount of ".$num." unit is Rs.".$totalbill;
     }

     elseif ($num >50 && $num <=150) {
        $totalbill= 50 * 3.50 + ($num - 50) * 4.00;
        echo "<br>Total amount of ".$num." unit is Rs.".$totalbill;
     }

     elseif ($num >150 && $num <=250) {
        $totalbill= 50 * 3.50 + 100 * 4.00 + ($num - 150) * 4.20;
        echo "<br>Total amount of ".$num." unit is Rs.".$totalbill;
     }

     else {
        $totalbill= 50 * 3.50 + 100 * 4.00 + 100 * 4.20 + ($num - 250) * 6.50;
        echo "<br>Total amount of ".$num." unit is Rs.".$totalbill;
     }
    ?>

         </div>
        </body>
</html>