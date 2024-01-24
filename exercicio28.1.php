
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
  <p>Faça um formulário que permita o envio de um arquivo. Trate o arquivo no lado do servidor para garantir que seja do tipo esperado e exiba informações sobre ele.</p>
  <hr>  
  <form action="exercicio28.2.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formFile" class="form-label fw-bolder lh-1">Insira um arquivo!</label>
            <input class="form-control" type="file" id="arquivo" name="arquivo" accept=".pdf, .doc, .docx">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 </div>
</body>
</html>
