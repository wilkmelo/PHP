<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP Strlen</title>
</head>
<body>
    <div>
        <?php
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase, 0);
        echo $cont;
        ?>
    </div>
</body>
</html>