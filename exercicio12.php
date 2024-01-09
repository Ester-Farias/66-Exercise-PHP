<?php

    //Faça um script que substitua todas as ocorrências de uma palavra
    // em uma frase por outra palavra.


    //Poema de Drummond:
   
    $poemDrummond = "No meio do caminho tinha uma pedra
tinha uma pedra no meio do caminho
tinha uma pedra
no meio do caminho tinha uma pedra.
Nunca me esquecerei desse acontecimento
na vida de minhas retinas tão fatigadas.
Nunca me esquecerei que no meio do caminho
tinha uma pedra
tinha uma pedra no meio do caminho
no meio do caminho tinha uma pedra.";
echo $poemDrummond;
$poem = ['caminho', 'pedra'];
$newpoem = ['arbusto', 'lavoura'];
$newfrase = str_replace($poem, $newpoem, $poemDrummond);
echo $newfrase;
?>