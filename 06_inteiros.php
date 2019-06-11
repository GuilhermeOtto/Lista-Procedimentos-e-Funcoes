<?php

function soma ($n1, $n2) {
   $n3 = $n1;
   $n1 = 0;
        while ($n3 <= $n2) {
            $n1 = $n1 + $n3 ;
            $n3 = $n3 + 1;
        }
    return $n1;
}

print " \n Digite o 1° número: ";
    $n1 = (int) fgets (STDIN);

print " \n Digite o 2° número: ";
    $n2 = (int) fgets (STDIN);

    $s = soma($n1, $n2);


print " \n o resultado da soma de todos os números inteiros presentes corresponde a: $s \n ";
