<?php
    echo "Exercicio 23\n\n";
    echo "Crie uma função que calcule o fatorial de um número.\n\n";

  function calcularFatorial($numero){
    if ($numero < 0){
        return "Fatorial inválido para números negativos! \n\n";
    
    }else{
        for($i = 1; $i <= $numero; $i++){
            echo "variavel i " . $i . "\n";
            $fatorial = $i - 1;
            echo "novo i - 1: " . $fatorial . "\n";
            $resultado = $fatorial * $fatorial;
           echo "variavel result " . $resultado . "\n" ;
           //return $resultado;         
        }
        
        return $resultado;
      
    }
  }
  $numeroUsuario = (int)readline("Digite um número inteiro positivo para calcular seu fatorial: \n");
  $resultado = calcularFatorial($numeroUsuario);
  echo "\n O fatorial do $numeroUsuario é de $resultado.";
?>