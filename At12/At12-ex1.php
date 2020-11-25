<?php

        $nome = "Funções de manipulação de strings no PHPs";
        $nome_maisculo = strtoupper($nome);//Retorna o argumento com todos os elementos em maiúsculas
        echo $nome_maisculo;


        $nome = " Funções de manipulação de strings no PHPs ";
        $nome_minusculo = strtolower($nome);//Retorna o argumento com todos os elementos em minúsculas
        echo $nome_minusculo;

        $nome= " Funções de manipulação de strings no PHPs ";
        $parte = substr($nome, 8);//
        echo $parte;

        $nome = "Linha de Código";
        $parte = substr($nome,0,5);
        echo $parte;

        $repetido = str_repeat("0", 5);
        echo $repetido;
    
        $qtd_char = strlen("Linha de código");
        echo $qtd_char;

        $texto 0 "Olá, mundo.";
        $novo_texto = str_replace("mundo","leitor", 4texto);
        echo $novo_texto;

        $texto = "Bem vindo ao linha de Código!";
        $pos = strpos($texto, "Código");
        echo $pos;
?>