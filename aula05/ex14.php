<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <div>
        <?php
        $ano = $_GET["an"];
        $idade = 2024 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade >=18 && $idade<65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "<br/>E dessa forma seu voto é $tipo!";
        ?>
    </div>
</body>
</html>