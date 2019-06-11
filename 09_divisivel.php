<?php

function divisivel($x, $y){
    if ($x % $y == 0) {
        return 1 ;

    } else{
        return 0 ;
    }
}

print "\n Digite o Dividendo: ";
$x = (int) fgets (STDIN);

print "\n Digite o Divisor: ";
$y = (int) fgets (STDIN);

$r = divisivel($x, $y);

print "\n $r \n \n";