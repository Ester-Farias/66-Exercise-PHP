<?php
  echo "Exercicio 22\n\n";
  echo "Implemente um programa de tabuada.\n\n";

  for($i = 0; $i <= 10; $i++){
    for($contador = 0; $contador <= 10; $contador++){
        while($i == $contador){
            echo "Tabuada do $contador \n";
            break;
        }
        
    }
    for($numbers = 0; $numbers <= 10; $numbers++){
        $conta = $i * $numbers;
        echo "$i X $numbers = $conta \n\n";
    }
    
  }


?>