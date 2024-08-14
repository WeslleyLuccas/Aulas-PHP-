<!DOCTYPE html>
<html>
<body>
    <?php
        //Radio Button
        echo "<br>Seu sistema operacional é: <br>" . $_POST["sistema"] . "<br><br>";

        //Checkbox
        if(isset($_POST["numeros"]))
        {
            echo "<b>Os números de sua preferência são:</b><br>";

            //Faz loop pelo array dos numeros
            foreach($_POST["numeros"] as $numero)
            {
                echo "- " . $numero . "<br><br>";
            
            }
        }
        else
        {
            echo "<b>Você não escolheu número preferido!</b><br><br>";
        }

        //
        echo "<b>Seu processador é: </b><br>" . $_POST["processador"] . "<br>";
    ?>
</body>
</html>