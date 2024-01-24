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
    (ok)   Crie um formulário HTML com um campo de entrada de arquivo (<input type="file">) para permitir que os usuários enviem arquivos.
    (ok)   Utilize o atributo enctype="multipart/form-data" no formulário para permitir o envio de arquivos.
    
    2. Tratamento no Lado do Servidor (usando PHP, por exemplo):
    (ok)   No lado do servidor, crie um script (por exemplo, processa_arquivo.php) para lidar com o envio do arquivo.
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

   
if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
    // Verifica se o arquivo foi enviado sem erros
    if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
        
        // Caminho para armazenar o arquivo (pode ser ajustado conforme necessário)
        $caminho_destino = "uploads/";

        // Obtém informações sobre o arquivo
        $nome_arquivo = $_FILES["arquivo"]["name"];
        $tamanho_arquivo = $_FILES["arquivo"]["size"];
        $tipo_mime = mime_content_type($_FILES["arquivo"]["tmp_name"]);

        // Verifica se o tipo de arquivo é suportado (por exemplo, PDF, DOC, DOCX)
        $tipos_suportados = ["application/pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
        
        if (in_array($tipo_mime, $tipos_suportados)) {
            // Move o arquivo para o destino desejado

            $caminho_destino = __DIR__ . "/uploads/";


            move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminho_destino . $nome_arquivo);

            // Exibe informações sobre o arquivo
            echo "<h2>Informações sobre o arquivo:</h2>";
            echo "<p><strong>Nome:</strong> $nome_arquivo</p>";
            echo "<p><strong>Tamanho:</strong> $tamanho_arquivo bytes</p>";
            echo "<p><strong>Tipo MIME:</strong> $tipo_mime</p>";
        } else {
            // Exibe mensagem de erro se o tipo de arquivo não é suportado
            echo "<p>O tipo de arquivo enviado não é suportado. Por favor, envie um arquivo PDF, DOC ou DOCX.</p>";
        }

    } else {
        // Exibe mensagem de erro se ocorrer um problema no envio do arquivo
        echo "<p>Ocorreu um erro no envio do arquivo.</p>";
    }
}
?>
 </div>
</body>
</html>
