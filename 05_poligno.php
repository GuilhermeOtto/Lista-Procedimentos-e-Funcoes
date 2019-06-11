<?php

function perimetro ($l, $t) {
    $p = $l * $t;

    return $p;
}

print " \n Digite a quantidade de lados (3, 4 ou 5): ";
    $l = (int) fgets (STDIN);

print " \n Digite a medida de um dos lados (cm): ";
    $t = (int) fgets (STDIN);

    $p = perimetro ($l, $t); 

        if ($l == 3) {
            print " \n O perímetro do triângulo corresponde a: $p \n \n ";

        } elseif ($l == 4) {
            print " \n O perímetro do quadrado corresponde a: $p \n \n ";
        
        } elseif ($l == 5) {
            print " \n O perímetro do pentágono corresponde a: $p \n \n ";
        } else {
            print " \n ERRO DE DIGITAÇÃO REINSIRA OS DADOS \n \n ";
        }