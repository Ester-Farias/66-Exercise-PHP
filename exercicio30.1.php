<?php
echo "\n\nExercicio 30 \n";
echo "Crie um arquivo de texto com algumas linhas e, em seguida, escreva um script PHP para ler e imprimir o conteúdo desse arquivo.\n\n";

$conteudo = "No Meio do Caminho\nNo meio do caminho tinha uma pedra\ntinha uma pedra no meio do caminho\ntinha uma pedra\nno meio do caminho tinha uma pedra.\n\nNunca me esquecerei desse acontecimento\nna vida de minhas retinas tão fatigadas.\nNunca me esquecerei que no meio do caminho\ntinha uma pedra\ntinha uma pedra no meio do caminho\nno meio do caminho tinha uma pedra.";

file_put_contents("exercicio30.2.txt", $conteudo);
echo "Conteúdo criado com sucesso! \n";

$doc = "exercicio30.2.txt";
if(file_exists($doc)){
    $conteudo = file_get_contents($doc);
    echo "Conteúdo do documento: \n\n";
    echo $conteudo;
} else {
    echo "O arquivo $conteudo não foi encontrado!";
}

?>