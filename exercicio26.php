<?php
    echo "Exercicio 26 \n";
    echo "Crie um gerador de senhas aleatórias com diferentes níveis de complexidade. \n";

    $lettermin = "abcdefghijklmnopqrstuvxwyz";
    $lettermai = "ABCDEFGHIJKLMNOPQRSTUVXWYZ";
    $caractspec = "!@#$%¨&*(),.;";
    $numbers = "0123456789";

    $numcaracters = (int)readline("Digite o número de caracteres que deseja para sua senha: \n");
    if ($numcaracters <= 8){
        echo "Digite um número maior ou igual a 8 caracteres!";
    } else if ($numcaracters >= 8){
        $letterMin = readline("Você deseja caracteres minusculos? (S / N) \n");
        $letterMai = readline("Você deseja caracteres maiusculos? (S / N) \n");
        $caractSpec = readline("Você deseja caracteres especiais? (S / N) \n");
        $number = readline("Você deseja caracteres numericos? (S / N) \n");
        
        if($letterMin == 'S' && $letterMai == 'S' && $caractSpec == 'S' && $number == 'S'){
           $total = $lettermin . $lettermai . $caractspec . $numbers;
           $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'S' && $letterMai == 'S' && $caractSpec == 'S' && $number == 'N'){
            $total = $lettermin . $lettermai . $caractspec;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'S' && $letterMai == 'S' && $caractSpec == 'N' && $number == 'S'){
            $total = $lettermin . $lettermai . $numbers;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'S' && $letterMai == 'S' && $caractSpec == 'N' && $number == 'N'){
            $total =  $lettermin . $lettermai ;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'S' && $caractSpec == 'S' && $number == 'S'){
            $total =  $lettermai . $caractspec . $numbers;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'S' && $letterMai == 'N' && $caractSpec == 'S' && $number == 'N'){
            $total =  $lettermin . $caractspec;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'S' && $letterMai == 'N' && $caractSpec == 'N' && $number == 'S'){
            $total =  $lettermin . $numbers;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'S' && $letterMai == 'N' && $caractSpec == 'N' && $number == 'N'){
            $total =  $lettermin;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'S' && $caractSpec == 'S' && $number == 'S'){
            $total = $lettermai . $caractspec . $numbers;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'S' && $caractSpec == 'S' && $number == 'N'){
            $total = $lettermai . $caractspec;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'S' && $caractSpec == 'N' && $number == 'S'){
            $total = $lettermai . $numbers;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'S' && $caractSpec == 'N' && $number == 'N'){
            $total = $lettermai;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'N' && $caractSpec == 'S' && $number == 'S'){
            $total = $caractspec . $numbers;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'N' && $caractSpec == 'S' && $number == 'N'){
            $total = $caractspec;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if ($letterMin == 'N' && $letterMai == 'N' && $caractSpec == 'N' && $number == 'S'){
            $total = $numbers;
            $senhaEmbaralhada .= str_shuffle($total);
            $senha = substr($senhaEmbaralhada,0,$numcaracters);
            echo "Sua senha é " . $senha;
        }else if($letterMin == 'N' && $letterMai == 'N' && $caractSpec == 'N' && $number == 'N'){
                echo "Você precisa escolher uma senha válida!
            Tente novamente. ";
        } else{
            echo "Comando inválido!";
        }

        }
    
    

?>