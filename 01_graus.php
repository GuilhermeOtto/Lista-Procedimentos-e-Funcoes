<?php

function graus ($t) {
    $t = ($t - 32) * 5/9;
    
    return $t;
}

print " \n Digite a temperatura em Fahrenheit: ";
    $f = (float) fgets(STDIN);

    $c = graus($f);

print " \n A temperatura em Celcius é: $c \n \n ";