
    <?php
    $num= $_POST['number'];
    $sum=0;
    for($i=0; $i<strlen($num);$i++){
        $sum= $sum + $num[$i];
    }
    echo "The sum of the digits is: ". $sum;
    ?>
