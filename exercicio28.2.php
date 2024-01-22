<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 28</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center">
 <div class="container p-5">
 <h1 class="text-center">Exercicio 28</h1>
  <p class="fw-bold">Dados retornados do formulário atráves do php:</p>
  <hr>
   
  <?php
/*
    1. Formulário HTML:
       Crie um formulário HTML com um campo de entrada de arquivo (<input type="file">) para permitir que os usuários enviem arquivos.
       Utilize o atributo enctype="multipart/form-data" no formulário para permitir o envio de arquivos.
    
    2. Tratamento no Lado do Servidor (usando PHP, por exemplo):
       No lado do servidor, crie um script (por exemplo, processa_arquivo.php) para lidar com o envio do arquivo.
       No script PHP, verifique se o método de requisição é POST e se o arquivo foi enviado corretamente.
       Use funções ou bibliotecas apropriadas para validar o tipo de arquivo, por exemplo, verifique a extensão do arquivo ou utilize 
       funções específicas para verificar o tipo MIME.
       Se o arquivo for do tipo esperado, mova-o para o local desejado no servidor. Caso contrário, exiba uma mensagem de erro.
    
    3. Exibição de Informações sobre o Arquivo:
       Após o tratamento do arquivo, exiba informações relevantes sobre ele. Isso pode incluir o nome do arquivo, o tipo MIME, o tamanho 
       e outras informações úteis.
       Certifique-se de tratar qualquer informação do arquivo com segurança para evitar vulnerabilidades de segurança, como injeção de 
       código.
       
    4. Considerações de Segurança:
       Implemente verificações de segurança adequadas, como limitar o tamanho máximo do arquivo permitido, validar o tipo MIME 
       corretamente e realizar a sanitização adequada para evitar possíveis ataques.
*/

   
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $file = $_GET["inputFile"] ?? "Sem arquivo!";
    echo "Recebemos seu arquivo! <br> Seu arquivo é: $file <br>";
    
} else {
    // Se o formulário não foi enviado, redirecione.
    echo "Formulário não enviado ou formulário sem documento!";
}
?>
 </div>
</body>
</html>
