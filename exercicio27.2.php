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
  <?php
echo "<pre>"; print_r($_SERVER); print_r($_POST); echo "</pre>";

   
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Recupere os dados do formulário
    $nome = $_GET["Nome"];
    $email = $_GET["Email"];
  $senha = $_GET["Senha"];

    // Faça algo com os dados (por exemplo, exiba-os)
    print_r($nome);
    echo "Email: $email <br>";
  echo "Senha: $senha <br>";
} else {
    // Se o formulário não foi enviado, redirecione ou lide com isso de outra forma
    echo "Formulário não enviado.";
}
?>
 </div>
</body>
</html>
