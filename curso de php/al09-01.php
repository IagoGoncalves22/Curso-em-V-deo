<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 ex 01</title>
</head>

<body>
    <form action="./al09-01.php" method="get">
        Ano de Nascimento:
        <input type="number" placeholder="4 digitos" name="ano" />
        <input type="submit" value="Verificar" />
    </form>
    <div>
        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "<br>Voce nasceu em $a e tem $i anos</br>";
        if ($i >= 18) {
            $v = "ja pode votar";
            $d = "ja pode dirigir";
        } else {
            $v = "nao pode votar";
            $d = "nao pode dirigir";
        }
        echo "<br>Com essa idade voce $v e tambem $d";
        ?>
    </div>

</body>

</html>