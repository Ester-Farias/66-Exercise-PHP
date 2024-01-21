<?php

    function calcMediaNotas(){
    echo "Exercicio 9 \n";
    echo "Calcule a média de suas notas: \n";
    $n1 = (float)readline("Digite a nota do primeiro semestre: ");
    $n2 = (float)readline("Digite a nota do segundo semestre: ");
    $n3 = (float)readline("Digite a nota do terceiro semestre: ");
    $media = ($n1 + $n2 + $n3) / 3;    
    return print_r("A média de suas notas é de : $media  pontos.");
    }
    $result = calcMediaNotas();
?>