

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 35</title>
</head>
<body>
<?php
   // echo "exercicio 35\n";
   // echo "Desenvolva um sistema de carrinho de compras simples\n";

   //Este é um array multidimencional
   //significa que dentro do primeiro array existe outros arrays.
   //e dentro desses muitos arrays existem produtos
    $items = array(
        ['imagem' => 'item1.png','preco' => '200'],
        ['imagem' => 'item2.png','preco' => '100'],
        ['imagem' => 'item3.png','preco' => '400']);
        
        foreach($items as $key => $value){
            
?>
    <div class="produto">
        <img src="<?php echo $value['imagem'] ?>">
        <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho</a>
    </div>
<?php
        }
?>
</body>
</html>l

