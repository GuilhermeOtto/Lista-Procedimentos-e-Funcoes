<?php

function dia ($n){

    if ($n < 1 or $n > 7){
        print "\n O NÚMERO INSERIDO NÃO CORRESPONDE A NENHUM DIA DA SEMANA. REINICIE O PROGRAMA \n ";
    }
    
    else  { 

        switch ($n) {           // Caso

            case 1:
            echo "\n DOM \n ";
            break;             //parar código
            
            case 2:
            echo "\n SEG \n ";
            break;
            
            case 3:
            echo "\n TER \n ";
            break;
            
            case 4:
            echo "\n QUA \n";
            break;
            
            case 5:
            echo "\n QUI \n ";
            break;
            
            case 6:
            echo "\n SEX \n ";
            break;
            
            case 7:
            echo "\n SÁB \n ";
            break;
        }
    }
}

print " \n Insira o número correspondente a um dia da semana: ";
    $n = (int) fgets (STDIN);

    $n = dia ($n);
