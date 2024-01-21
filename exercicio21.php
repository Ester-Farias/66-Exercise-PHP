<?php
    echo "Exercicio 21\n\n";
    echo "Manipule datas: obtenha a data atual e imprima-a no formato 'dia/mês/ano'. \n\n";

    $olddate = Date(null);
    print_r("$olddate \n");
    $newdate = Date("d/m/Y");
    print_r("A data manipulada é de " . $newdate);

?>