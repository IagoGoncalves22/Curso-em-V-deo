<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 ex 02</title>
</head>

<body>
    <form action="./al08-02.php">
        Nome: <input type="text" name="nome">
        <br>
        Ano de Nascimento: <input type="number" name="ano">
        <br>
        <fieldset>
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="Masculino" checked>
            <label for="masc">Masculiino</label>
            <br>
            <input type="radio" name="sexo" id="fem" value="Feminino">
            <label for="fem">Feminino</label>
        </fieldset>
        <input type="submit" value="Enviar">

        <?php
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;
        echo "$nome e $sexo e tem $idade anos.";
        ?>




    </form>

</body>

</html>