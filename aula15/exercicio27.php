<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP Strpos</title>
</head>
<body>
    <div>
        <?php
        $frase = "Estou apredendo PHP";
        $pos = strpos($frase, PHP);
        echo "$frase <br/> A string foi encontrada na posição $pos";
        ?>
        
    </div>
</body>
</html>