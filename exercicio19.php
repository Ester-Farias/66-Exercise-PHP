<?php
    echo "Exercicio 19\n\n";
    echo "Utilize um loop para imprimir os valores de um array em ordem reversa. \n\n";

    $numbers = [1,2,3,4,5,6,7,8,9,10];
    foreach(array_reverse($numbers) as $number){
        echo "$number \n";
    }


?>