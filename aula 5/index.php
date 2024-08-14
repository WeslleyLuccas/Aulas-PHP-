<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formCadastro" name="formCadastro" method="POST" action="recebeForm.php">

        <!-- Radio Button -->
        <b>Qual seu sistema operacional?</b><br>
        <input type="radio" name="sistema" value="Windows 8.1"> Win 98 <br>
        <input type="radio" name="sistema" value="Windows 10"> Win 98 <br>
        <input type="radio" name="sistema" value="Linux"> Linux <br>
        <input type="radio" name="sistema" value="Mac"> Mac <br><br>

        <!-- Checkbox -->
        <b>Escolha os numeros de sua preferência:</b><br>
        <input type="checkbox" name="numeros[]" value=10> 10 <br>
        <input type="checkbox" name="numeros[]" value=100> 100 <br>
        <input type="checkbox" name="numeros[]" value=1000> 1000 <br>

        <!-- Dropdown list -->
        <b>Qual seu processador?</b><br>
        <select name="processador">
        <option value="Pentium">Pentium</option>
        <option value="AMD">AMD</option>
        <option value="Celeron">Celeron</option>
        </select><br><br>

        <input id="botaoEnviar" type="submit" value="Enviar">
    </form>
</body>
</html>