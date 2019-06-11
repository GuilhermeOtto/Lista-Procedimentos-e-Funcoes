<?php

function peso ($s, $h) {

    if ($s == 1){
        $p = (62.1 * $h) - 44.7;
    return $p;

    } else{
        $p = (72.7 * $h) -58;
    return $p;
    }
}

print "\n Digite seu sexo (1 = Feminino / 2 = Masculino: ";
    $s = (int) fgets(STDIN);

print "\n Digite sua altura (metros): ";
    $h = (float) fgets(STDIN);

    $p = peso ($s, $h);

print "\n Seu peso ideal é: $p \n \n";

