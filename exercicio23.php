<?php
    echo "Exercicio 23\n\n";
    echo "Crie uma função que calcule o fatorial de um número.\n\n";

  function calcularFatorial($numero){
    if ($numero < 0){
        return "Fatorial inválido para números negativos! \n\n";
    }else if($numero == 1){
        return 1;
    }else{
        for($i = 1; $i <= $numero; $i++){
            echo $i;
            while ($i >= 1 and $i <= $numero){
                echo $i * $numero;
                
                break;
            }
        }
      
    }
  }
  $numeroUsuario = (int)readline("Digite um número inteiro positivo para calcular seu fatorial: \n");
  $resultado = calcularFatorial($numeroUsuario);
  echo "\n O fatorial do $numeroUsuario é de $resultado.";
?>