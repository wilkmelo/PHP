<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP Print_r</title>
</head>
<body>
    <div>
        <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
        $r = wordwrap($t, 5, "<br/>\n, false");
        echo $r;
        ?>
    </div>
</body>
</html>