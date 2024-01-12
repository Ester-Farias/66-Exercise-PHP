<?php
    echo "Exercicio 20\n\n";
    echo "Crie um array associativo com informações de produtos (nome, preço, quantidade em estoque) 
    e imprima uma tabela HTML com esses dados.\n\n";

    $info = [
        'nome' => 'Mesa',
        'preço' => '2399',
        'qtd_estq' => 37
    ];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade no Estoque</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        <?php for($i = 0; $i < count($info); $i++){
          echo "<tr>";
          for($j = 0; $j < count($info($i)); $j++){
            echo "<th>" . $info[$i][$j] . "</th>";
          }
          echo "</tr>";
        }
        
        ?>
        </tbody>
      </table>
</body>
</html>