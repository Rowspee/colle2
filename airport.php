<?php

function airport($str){
    $max = strlen($str);
    $a = 0;
    $b = -1;
    $affia = substr($str, $a, $max);
    $affib = substr($str, $b, $a);
    do {
        $a++;
//        echo "$affia";
    } while($a=$max);
    do {
        $b++;
        $a++;
        echo ("$affia $affib") . PHP_EOL;
//        echo "$affib";
    } while($a=$max);
    
}
airport("Le but de notre vie est d'etre heureux.")
?>