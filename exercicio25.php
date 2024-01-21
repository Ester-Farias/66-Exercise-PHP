<?php
    echo "Exercicio 25\n\n";
    echo "Implemente uma função para converter uma temperatura de Celsius para Fahrenheit e vice-versa.\n\n";

    echo "Escolha a opção para converter a temperatura:
    \n1. Celcius para Fahrenheit.
    \n2. Fahrenheit para Celcius.";
    $option = (int)readline("\nDigite 1 para a primeira opção e 2 para a segunda.");
    if ($option == 1){
        $input = (int)readline("\nDigite a temperatura em celcius: ");
        $result = $input * 1.8 + 32;
        echo "$input graus Celcius é $result em Fahrenheit.";
    } else if ($option == 2){
        $input = (int)readline("\nDigite a temperatura em Fahrenheit: ");
        $result = ($input - 32)/ 1.8; 
        echo "$input Fahrenheit é $result em graus Celcius.";
    }else{
        echo "Opção inválida! Tente novamente";
    }


?>