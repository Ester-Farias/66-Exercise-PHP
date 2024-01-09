<?php

    function calcAreaQuadrado(){
        echo "Exercicio 7 \n";
        echo "Calcule a area de um quadrado \n";
        echo "Medidas em formato de metros! \n";
        $base = (float)readline("Digite o tamanho da base:");
        $altura = (float)readline("Digite o tamanho da altura:");
        $area = $base + $altura;
        return print_r("O tamanho da área é de $area metros");
    }
    $result = calcAreaQuadrado();
?>