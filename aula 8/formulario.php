<?php

if(isset($_POST["submit"])){
    print_r("Nome: ".$_POST["nome"]);
    print_r("<br>");
    print_r("Senha: ".$_POST["senha"]);
    print_r("<br>");
    print_r("Email: ".$_POST["email"]);
    print_r("<br>");
    print_r("Telefone: ".$_POST["telefone"]);
    print_r("<br>");
    print_r("Sexo: ".$_POST["sexo"]);
    print_r("<br>");
    print_r("Data de Nascimento: ".$_POST["data_nascimento"]);
    print_r("<br>");
    print_r("Cidade: ".$_POST["cidade"]);
    print_r("<br>");
    print_r("Estado: ".$_POST["estado"]);
    print_r("<br>");
    print_r("Endereço: ".$_POST["endereco"]);
    print_r("<br>");

    include_once("conexao.php"); //conecta com o arquivo php conexao // include_once = deixar enviar o dados apenas uma vez, não deixa repetir os mesmo dados (ex certp: 1 wesley, 1 lucas, 1 joão).

    $nome =$_POST["nome"]; //$_POST = ela é privada; "Ela é resevada", tipo de variavel unica, ela é separada.  
    $senha =$_POST["senha"];
    $email =$_POST["email"];
    $telefone =$_POST["telefone"];
    $sexo =$_POST["sexo"];
    $data_nasc =$_POST["data_nascimento"];
    $cidade =$_POST["cidade"];
    $estado =$_POST["estado"];
    $endereco =$_POST["endereco"];

    $result =mysqli_query($mysqli,"INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
    VALUES ('$nome','$senha',$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')"); //INTERT INTO é para enviar para o banco de dados.


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulario de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome comple</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminio" required>
                <label for="feminio">Feminio</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser"required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
