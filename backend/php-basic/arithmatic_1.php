<?php 

 $a = 5;
 $b = 2;
 echo "<br>";
 echo -$a."</br>";
 echo $a*$b."</br>";
 echo $a**$b .'</br>';

 $degF = 98.6;
 $degC = ($degF - 32)/9*5;

 echo $degC.'&degC'.'</br>';

 $c = 5.9;
 $d = 2.8;

 echo $c%$d.'</br>';

 $total = 5;
 $total = $total +2;

 echo $total;

 $number = 4;
 $number++;
 echo '<br>';
//  echo $number.'</br>';

 ++$number;
 echo $number;

 $munite = 318;
 $hour = $munite/ 60;
 $munite = $munite%60;

 echo "Time taken was ".round($hour)." hour". $munite." munite";

 echo '</br>';

 $i = 0;
 while($i<10){
     $i++;
     
     if($i % 2){
         continue;
     }
     echo $i.'<br>';
    //  if($i==7){
    //      break;
    //  }
 }

 $j = 100;
 do{
     $j++;
     echo $j.'</br>';
 }while($j<10);

 //for(initialization; condition; incriment/decriment){ //repeat something while condition is matched}
 
?>