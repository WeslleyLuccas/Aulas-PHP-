<?php
    $hostname="localhost";
    $bancodedados="cadastro";
    $usuario="root";
    $senha="";

    $mysqli= new myqli($hostname,$usuario,$senha,$bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(".$mysqli->connect_errno.")".$mysqli->connect_errno;
    }
    else
        echo "Conectado ao Banco de dados"

?>