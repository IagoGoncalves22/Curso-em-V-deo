<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - ex 02</title>
</head>

<body>
    <div>

        <form action="./al11-teste.php" method="get">
            <?php
            $con = 1;
            while ($con <= 5) {
                echo " Valor $con: <input type='number' name='v$con' max='100' min='0' value='0' /><br>";
                $con++;
            }   
            ?>
            <input type="submit" value="Enviar" class="botao" />
        </form>
    </div>

    <div>
        <?php


        ?>
    </div>

</body>

</html>