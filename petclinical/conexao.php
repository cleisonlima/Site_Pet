<?php

$hostname = "localhost"; // se voce estiver usando um servidor local 
$user = "root"; // usuario root
$password = "123";  //meu banco nao possui senha entao fica em branco
$database = "bd_cadastro"; // adiciona ao banco de dados
$conexao = mysqli_connect ($hostname,$user,$password,$database);

    if(!$conexao){
        echo "falha na conexao com o banco de dados";
    }

    ?>
