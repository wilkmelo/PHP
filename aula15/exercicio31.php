<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP Str_ireplace</title>
</head>
<body>
    <div>
        <?php
        $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
        $novafrase = str_ireplace("Matemática", "PHP", $frase);
        echo "$novafrase";
        ?>
        
    </div>
</body>
</html>