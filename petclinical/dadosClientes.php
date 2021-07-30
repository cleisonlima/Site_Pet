<?php

include_once("conexao.php");


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $data_nasc = $_POST['data_nasc'];
    $opiniao = $_POST['opiniao'];

    $sql = "INSERT INTO tb_clientes (nome, email, telefone, endereco, cidade, estado, data_nasc, opiniao)
            VALUES('$nome','$email','$telefone','$endereco','$cidade','$estado','$data_nasc','$opiniao')";
        
    $salvar = mysqli_query($conexao,$sql);
    $linhas = mysqli_affected_rows($conexao);

    
    mysqli_close($conexao);
    

    if($linhas == 1){

    echo "<h3>Sucesso! Formulário Enviado: </h3> <br>

    <h5>Preenchido por: 
    nome: $nome <br>
    email: $email <br>
    telefone: $telefone <br>
    endereco: $endereco <br>
    estado: $estado <br>
    nascimento: $data_nasc <br>
    opiniao: $opiniao <br>
    </h5>";

    }
    else
    {
    
    echo "<h2>Erro!</h2>
    <h5>Consulte um Administrador:</h5>";
    }
    header("Location:index.html");
    ?>