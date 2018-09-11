<?php
    $number = 2;
    //pass by value
    function doubleIt($number){
        $num = $number*2;
        return $num;
    }

    $double = doubleIt(8);

    echo $double;
    echo "<br>";

    //pass by reference
    function doubleRef(&$num){
        return $double = $num*2;
    }

    echo doubleRef($number);

    echo "<br>";
    $ashura = strtotime('Sep 21, 2018');
    echo date('l,F j, Y',$ashura);
?>