

<?php
    echo "Par ou impar \n";
    $num = (int)readline("Digite um número inteiro: \n");
    echo $num;
    if ($num % 2 == 0){
        echo"\n Este número é par";
    } else{
        echo "\n Este número é impar";
    }
?>