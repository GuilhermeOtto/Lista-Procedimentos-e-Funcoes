<?php

function maior ($n1, $n2){
    if ($n1 > $n2) {
        print "\n Maior Número: $n1 \n \n";

    } elseif ($n2 > $n1) {
        print "\n Maior Número: $n2 \n \n";

    } else{
        print "\n Não existe, Os números são iguais. \n \n";
    }
}


print "\n Digite o primeiro número: ";
$n1 = (float) fgets (STDIN);

print "\n Digite o segundo número: ";
$n2 = (float) fgets (STDIN);

$n1 = maior ($n1, $n2);