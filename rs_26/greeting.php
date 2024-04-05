<?php
$current_time=date('h:i:s');

if($current_time>=12) {
    echo "Good Morning";
} else if ($current_time <=17){
    echo "Good Afternoon";
}else if( $current_time <= 19 ) {
    echo "Good Evening";
}else{
    echo "Good Night";
}


//vowel check
$vowel=array('a','e', 'i','o','u');
$consonant=array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
$ch="hi im rinki saha";
$count=0;
$count1=0;
$cont='';
$cont1='';
for($i=0; $i<strlen($ch); $i++){
    if (in_array($ch[$i], $vowel)) {
        $count++;
        $cont = $cont.$ch[$i];
    }
    else if(in_array($ch[$i], $consonant)){
        $count1++;
        $cont1 = $cont1.$ch[$i];
    }
}
echo "<br> The number of vowels are: ".$count;
echo "<br> The vowels are: ".$cont;
echo "<br> The number of consonant are: ".$count1;
echo "<br> The consonants are: ".$cont1;


?>