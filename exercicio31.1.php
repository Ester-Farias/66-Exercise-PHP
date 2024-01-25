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
switch($start){
    case 1:
        //Listar as tarefas existentes/ se não existente -> case criar tarefas
        
        if(file_exists($doc)){
            $tarefas = file_get_contents($doc);
            echo "Tarefas listadas: \n\n";
            echo $tarefas;
        } else {
            echo "Você não tem tarefas adicionadas!";
        }

        break;
    
    case 2:
        //Adicionar tarefas
                
        $tarefa = readline("Digite a tarefa a ser adicionado: \n");

        file_put_contents("exercicio31.2.txt", $tarefa);
        echo "Tarefa adicionada com sucesso! \n";


        if(file_exists($doc)){
            $tarefa = file_get_contents($doc);
            echo "Tarefa adicionadas: \n\n";
            echo $tarefa;
        } else {
            echo "O arquivo $tarefa não foi encontrado!";
        }

        break;

    case 3:
        //Editar tarefas existentes
        break;

    case 4:
        //Apagar tarefas
        break;

    default:
        echo "Comando inválido, tente novamente!";
}

?>

