<?php


    //Utilizar a função explode para separar uma frase em palavras e imprima
    // cada palavra em uma linha.
    $frase = 'A montanha era muito mais longe do que todos nós esperavamos';
    $words = explode(' ', $frase);
    foreach($words as $word){
        echo $word . PHP_EOL;
    }
?>