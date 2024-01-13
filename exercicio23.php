<?php
    echo "Exercicio 23\n\n";
    echo "Crie uma função que calcule o fatorial de um número.\n\n";

  function calcularFatorial($numero){
    if ($numero < 0){
        return "Fatorial inválido para números negativos! \n\n";
    }else if($numero == 1){
        return 1;
    }else{
        for($i = 2; $i <= $numero; $i++){
            $fatorial *= $i;
        }
        return $fatorial;
    }
  }
  $numeroUsuario = (int)readline("Digite um número inteiro positivo para calcular seu fatorial: \n");
  $resultado = calcularFatorial($numeroUsuario);
  echo "O fatorial do $numeroUsuario é de $resultado.";
?>