<?php
echo "\n\nExercicio 31 \n";
echo "Desenvolva um sistema simples de lista de tarefas que permita adicionar, 
excluir e marcar tarefas como concluídas. Armazene as tarefas em um arquivo.\n\n";

echo "
Digite 1 para visualizar suas tarefas.
Digite 2 para criar uma nova tarefa.
Digite 3 para editar uma tarefa.
Digite 4 para apagar uma tarefa.\n";
$start = (int)readline("Digite a opção desejada: \n");
$doc = "exercicio31.2.txt";

switch ($start) {
    case 1:
        //Listando novas tarefas
        if (file_exists($doc)) {
            $tarefas = file($doc, FILE_IGNORE_NEW_LINES);
            if (!empty($tarefas)) {
                echo "Tarefas listadas: \n\n";
                foreach($tarefas as $index => $tarefa){
                    echo ($index + 1) . ". " . $tarefa . PHP_EOL;
                }    
            } else {
                echo "Você não tem tarefas adicionadas!";
            }
        } else {
            echo "Arquivo de tarefas não encontrado!";
        }

        break;

    case 2:
        //Adicionando novas tarefas
      $tarefas = readline("Digite a nova tarefa a ser adicionada: ");
      file_put_contents($doc, ($index) . $tarefas . PHP_EOL, FILE_APPEND);
      echo "Tarefa adicionada com sucesso!";

      break;
    case 3:
        //Editando novas tarefas
        if (file_exists($doc)) {
            $tarefas = file($doc, FILE_IGNORE_NEW_LINES);
            if (!empty($tarefas)) {
                echo "Tarefas listadas: \n\n";
                foreach($tarefas as $index => $tarefa){
                    echo ($index + 1) . ". " . $tarefa . PHP_EOL;
                } 
                $numero_tarefa = readline("Digite o número da tarefa a ser apagada! \n\n");

                //Verificando se o número digitado corresponde com as listagens de tarefas.
                if($numero_tarefa >=1 && $numero_tarefa <=count($tarefas)){
                    $nova_tarefa = readline("Digite a nova tarefa a ser adicionada!\n");
                     $tarefas[$numero_tarefa - 1] = $nova_tarefa;
                    
                    //$edittarefa = $numero_tarefa . ". " . $nova_tarefa;

                   file_put_contents($doc, implode(PHP_EOL, $tarefas));
                   //echo $edittarefa;
                    echo "Tarefa editada com sucesso!";
                } else {
                    echo "Número da tarefa inválido! \n";
                }
                
            } else {
                echo "Você não tem tarefas adicionadas!";
            }
        } 

        break;

    case 4:
           
       //Apagando novas tarefas
       $tarefas = file($doc, FILE_IGNORE_NEW_LINES);
        if (!empty($tarefas)){
            echo "Tarefas listadas: \n\n";
            foreach($tarefas as $index => $tarefa){
                echo ($index + 1) . ". " . $tarefa . PHP_EOL;
            }
            $numero_tarefa = (int)readline("Digite o número da tarefa a ser apagada! \n\n");
            if($numero_tarefa >= 1 && $numero_tarefa <= count($tarefas)){
                unset($tarefas[$numero_tarefa - 1]);
                file_put_contents($doc, implode(PHP_EOL, $tarefas));
                echo "Tarefa apagada com sucesso! \n\n";
            } else{
                echo "Número da tarefa inválido! \n \n";
            }
        } else{
            echo "Você não tem tarefas adicionadas!";
        }

        break;

    default:
        echo "Comando inválido, tente novamente!";
}
?>
