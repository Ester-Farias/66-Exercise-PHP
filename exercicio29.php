<?php
    echo "Exercicio 29 \n";
    echo "Faça uma requisição HTTP para obter dados de uma API (por exemplo, a API do GitHub).\n";
  

    //Endpoint
    $endpoint = "https://api.github.com/users/satellasoft";

    //Inicializando:
    //Aqui eu posso definir varias bibliotecas simultaneas, só mudando o nome da varialvel.
    $cURL = curl_init();

    //Processar:

    //Definindo a url que queremos realizar a consulta:
    curl_setopt($cURL, CURLOPT_URL, $endpoint);

    //Habilitando a captura da resposta, sendo o resultado que queremos.
    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

    //Definindo um cabecalho obrigatório para consumir a API do github:
    curl_setopt($cURL, CURLOPT_USERAGENT, 'cURL');
    curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($cURL, CURLOPT_SSL_VERIFYHOST, 2);

    //Executa a requisição e armazena a resposta na variável $response:
    $response = curl_exec($cURL);

    if (curl_errno($cURL)){
        echo curl_errno($cURL) . " Error!";
    } else {
        print($response);
    }
    //Fechando a variável de sessão:
    curl_close($cURL); //Fechando a variavel que abrimos lá no inicio
