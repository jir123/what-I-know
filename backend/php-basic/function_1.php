<?php
    
    function lyn_convertToMinutes($second) {
        $sec = $second %60;
        if(function_exists('intdiv')){
            $min = intdiv($second,60);
        }else{
            $min = ($second - $sec)/60;
        }
        $sec = abs($sec);
        $sec = ($sec<10) ? "0".$sec:$sec;
        return "$min:$sec";
    }

    echo lyn_convertToMinutes(547);
?>