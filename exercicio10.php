<?php

    function numCaracter(){
        $num = readline('Digite uma palavra: ');
        echo "Sua palavra possui "  . mb_strlen($num) . " caracteres.\n" ;
        return $num;
    }

    echo $resul = numCaracter();
     


?>