<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(10,32,44,12,23,56,2,9,2);

    //display the array
    print_r($arr);
    echo "<br><br>";

    //display the element using foreach loop
    foreach($arr as $num){
        echo $num."<br>";
    }

    echo "<br><br>";

    //displaying the array in a sorted order
    echo "The sorted array is: <br>";
    sort($arr);
    print_r($arr);
    echo "<br><br>";


    //remove duplicate value
    echo "Array after removing duplicate value is: <br>";
    $arr=array_unique($arr);
    print_r($arr);
    echo "<br><br>";


    //remove the last element
    echo "Array after removing last element: <br>";
    array_pop($arr);
    print_r($arr);
    echo "<br><br>";


    //Reverse array
    echo "Array after reversing: <br>";
    rsort($arr);
    print_r($arr);
    echo "<br><br>";


    //Insert element in a specific position
    echo "Array after inserting element in a specific position: <br>";
    array_splice($arr,1,0,26);
    print_r($arr);
    echo "<br><br>";

    //searching element's position of an array
    echo "The position of 2 is : ".array_search(2,$arr); 
    ?>
</body>
</html>