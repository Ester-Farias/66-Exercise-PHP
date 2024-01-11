<?php
    echo "Exercicio 17 \n\n";
    echo "Faça uma pesquisa em um array e retorne o índice de um elemento específico \n\n";

    $estoque = [
        'Cadeira' => 1,
        'Mesa'=> 2,
        'Sofá'=> 3 
    ];
    $output = (int)readline("Digite o número que você deseja visualizar: \n\n");
    $output = array_search($output, $estoque);
    echo $output;

?>