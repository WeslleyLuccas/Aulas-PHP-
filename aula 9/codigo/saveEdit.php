<?php

include_once('config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $aqlInsert = "UPDATE usuarios
    SET nome ='$nome',senha ='$senha',email = '$email',telefone = '$telefone',sexo = '$sexo',
    data_nasc = '$data_nasc',cidade = '$cidade',estado = '$estado',endereco = '$endereco'
    WHERE id = $id";
    $result = $conexao -> query($sqlInsert);
    print_r($result);
}
hearder('Location: sistema.php');

?>