<?php

function cm ($n){
    $n = $n * 2.54;
    return $n;
}

print "\n Digite a medida em polegadas: ";
$n = (float) fgets(STDIN);

$n = cm ($n);

print "\n Medida em centímetros: $n \n \n";