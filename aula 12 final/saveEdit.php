<?php

include_once('config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $privilegio = $_POST['privilegio'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $sqlInsert = "UPDATE usuarios
    SET nome ='$nome',senha ='$senha',privilegio ='$privilegio',email = '$email',telefone = '$telefone',sexo = '$sexo',
    data_nasc = '$data_nasc',cidade = '$cidade',estado = '$estado',endereco = '$endereco'
    WHERE id = $id";
    $result = $conexao -> query($sqlInsert);
    print_r($result);
}
header('Location: sistema.php');

?>