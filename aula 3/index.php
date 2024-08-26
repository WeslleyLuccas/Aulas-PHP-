<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $temp = array('Outubro' => 27, 'Novembro' => 28, 'Dezembro' => 19);

        foreach($temp as $chave => $valor){
            echo 'A temperatura média de $chave foi de $valor graus <br/>';
        }
        
    ?>
<br>
    <?php
    for($i = 1; $i <= 10; $i++){
        echo $i;
    }
    ?>
<br>
    <?php
        $nota1 = 10;
        $nota2 = 10;
        
        $media = ($nota1 + $nota2) /2;

        if($media >= 7){
            echo $media, '<br/> passemo';
        }else {
            echo "perdemu";
        };
        
    ?>
    
</body>
</html>