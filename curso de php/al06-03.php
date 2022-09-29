<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis referenciadas</title>
</head>
<div>
    <h1>Variáveis referenciadas</h1>
    <?php
    $a = 3;
    $b = $a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br/> A variavel B vale $b";
    ?>
</div>


<body>

</body>

</html>