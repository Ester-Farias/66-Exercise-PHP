<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 32</title>
</head>
<body>
    <?php
    if(isset($_POST['acao'])){
        //Formulário foi enviado!
        $arquivo = $_FILES['file'];

        $arquivoNovo = explode('.', $arquivo['name']);

        //sizeof -> pegando o tamanho do arquivo
        if ($arquivoNovo[sizeof($arquivoNovo)-1] != 'png'){
            // Die faz com que a operação morra caso caia neste fluxo
            // A operação caira neste fluxo se o arquivo for diferente de png
            // sizeof $arquivo - 1 é para indicar o ultimo arquivo submetido comparar
            // para ver se ele é ou não png
            die('Você não pode fazer uploud deste tipo de arquivo!');
        } else{
            move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
            die('Uploud da imagem feito com sucesso!');

        }
    }

    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>