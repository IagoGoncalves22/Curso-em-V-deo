<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 ex 01</title>
</head>

<body>
    <form action="./al08-01.php" method="get">
        <input type="number" name="v">
        <input type="submit" value="calcular raiz">

    </form>

    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é igual a " . number_format($rq, 2);


    ?>

</body>

</html>