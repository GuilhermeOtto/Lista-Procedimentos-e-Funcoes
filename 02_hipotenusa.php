<?php

function hipotenusa ($co, $ca){
    $z = sqrt (($ca**2) + ($co**2) );

    return $z;
}

print " \n Digite o Cateto Adjacente: ";
    $x = (float) fgets (STDIN);

print " \n Digite o Cateto Oposto: ";
    $y = (float) fgets (STDIN);

    $h = hipotenusa ($x , $y);

print " \n Hipotenusa: $h \n \n";
