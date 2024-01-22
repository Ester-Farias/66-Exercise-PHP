<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 27</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center">
 <div class="container p-5">
 <h1 class="text-center">Exercicio 27</h1>
  <p class="fw-bold">Dados retornados do formulário atráves do php:</p>
  <hr>
   
  <?php


   
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $nome = $_GET["Nome"] ?? "Sem nome";
    $email = $_GET["Email"] ?? "Sem e-mail";
    $senha = $_GET["Senha"] ?? "Sem senha";

    echo "Nome do usuario inserido: $nome <br>";
    echo "Email inserido: $email <br>";
    echo "Senha inserida: $senha <br>";
} else {
    // Se o formulário não foi enviado, redirecione ou lide com isso de outra forma
    echo "Formulário não enviado.";
}
?>
 </div>
</body>
</html>
