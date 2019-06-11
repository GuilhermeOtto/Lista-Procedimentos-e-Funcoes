<?php

function dia ($n){

    if ($n < 1 or $n > 12){
        print "\n O NÚMERO INSERIDO NÃO CORRESPONDE A NENHUM MÊS DO ANO. REINICIE O PROGRAMA \n ";
    }
    
    else  { 

        switch ($n) {           // Caso

            case 1:
            echo "\n Janeiro\n ";
            break;             //parar código
            
            case 2:
            echo "\n Fevereiro \n ";
            break;
            
            case 3:
            echo "\n Março \n ";
            break;
            
            case 4:
            echo "\n Abril \n";
            break;
            
            case 5:
            echo "\n Maio \n ";
            break;
            
            case 6:
            echo "\n Junho \n ";
            break;
            
            case 7:
            echo "\n Julho \n ";
            break;

            case 8:
            echo "\n Agosto \n ";
            break;

            case 9:
            echo "\n Setembro \n ";
            break;

            case 10:
            echo "\n Outubro \n ";
            break;

            case 11:
            echo "\n Novembro \n ";
            break;

            case 12:
            echo "\n Dezembro \n ";
            break;

        }
    }
}

print " \n Insira o número correspondente a um mês do ano: ";
    $n = (int) fgets (STDIN);

    $n = dia ($n);
