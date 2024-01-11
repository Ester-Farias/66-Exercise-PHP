<?php
    echo "Exercicio 18\n\n";
    echo "Crie uma função para verificar se uma palavra é um palíndromo.\n\n";

    $word = [readline("Digite uma palavra para descobrir é ou não um palíndromo: \n\n")];
    $reverse = array_reverse($word);
    if ($word == $reverse){
        echo "Sua palavra é um palíndromo! \n";
    } else{
        echo "Sua palavra não é um palíndromo! \n";
    }


?>