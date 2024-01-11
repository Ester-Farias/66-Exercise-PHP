<?php
    echo "Exercicio 13\n\n";
    echo "Crie um array com números aleatórios e encontre o maior valor. \n\n";
    $number = [4, 54, 478, 1, 32, 7, 9844];
    sort($number);
    $last_number = end($number);
    print_r("O maior número do array é " . $last_number);
?>