<?php
    echo "Exercicio 18\n\n";
    echo "Crie uma função para verificar se uma palavra é um palíndromo.\n\n";

    $original = readline("Digite uma palavra para descobrir se ela é ou não um palíndromo: \n");
    $newversion = strrev($original);
    if ($newversion == $original){
        echo "Sua palavra $original é um palíndromo!";
    }else{
        echo "Sua palavra $original não é um palíndromo!";
    }


?>