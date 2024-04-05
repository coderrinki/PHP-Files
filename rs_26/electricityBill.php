<?php
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