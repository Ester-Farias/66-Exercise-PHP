<?php
   // echo "Exercicio 20\n\n";
   // echo "Crie um array associativo com informações de produtos (nome, preço, quantidade em estoque) 
   // e imprima uma tabela HTML com esses dados.\n\n";

    $produtos = array(
      array("Nome" => "Produto 1", "Preço" => 10.00, "QtdEstq" => 50),
      array("Nome" => "Produto 2", "Preço" => 20.00, "QtdEstq" => 51),
      array("Nome" => "Produto 3", "Preço" => 30.00, "QtdEstq" => 52)
    )

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center">
 <div class="container p-5">
   <h1 class="text-center">Exercicio 20</h1>
  <p>Crie um array associativo com informações de produtos (nome, preço, quantidade em estoque) e imprima em uma tabela HTML com esses dados.</p>
    <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade no Estoque</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          foreach ($produtos as $produto){
            echo "<tr>";
            echo "<td>{$produto['Nome']}</td>";
            echo "<td>{$produto['Preço']}</td>";
            echo "<td>{$produto['QtdEstq']}</td>";
            echo "</tr>";
          }

        ?>
        </tbody>
      </table>
 </div>
</body>
</html>