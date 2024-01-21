<?php
    echo "Exercicio 16 \n\n";
    echo "Crie uma função que receba um número e retorne se é positivo, negativo ou zero. \n\n";

    $number = (float)readline("Digite um número para retornar o tipo dele: (Positivo, Negativo e Zero) \n\n");
        if ($number >= 1){
            echo "Seu número é positivo. \n\n";
        } else if ($number < 0){
            echo "Seu número é negativo. \n\n";
        } else if ($number = 0) {
            echo "Seu número é zero! \n\n";
        } else{
            echo "Voce digitou uma opção inválida!\nTente novamente.";
        }
?>