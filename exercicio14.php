<?php
    echo "Exercicio 14 \n\n";
    echo "Escreva uma função que receba um array de números e retorne a média. \n\n";
    function mediaNumArray(){
    $array = [1,2,3,4,5];
    return print_r(array_sum($array) / count($array));
    }
    $result = mediaNumArray();

?>