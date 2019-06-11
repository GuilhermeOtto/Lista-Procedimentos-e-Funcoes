<?php

function media ($n1, $n2){

    $m = ($n1 + $n2)/2;

    return $m;
}

print "\n Digite a 1° nota: ";
    $n1 = (float) fgets(STDIN);

print "\n Digite a 2° nota: ";
    $n2 = (float) fgets(STDIN);

    $m = media ($n1, $n2);

        if ($m >= 6) {

          print "\n PARAÉNS! você foi aprovado com a média: $m \n \n";

        } else{

            print "\n REPROVADO, média: $m \n \n";

        }