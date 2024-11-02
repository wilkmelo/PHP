<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP implode</title>
</head>
<body>
    <div>
        <?php
       $vetro [0] = "Curso";
       $vetor [1] = "em ";
       $vetor [2] = "Vídeo";
       $texto = implode ("#", $vetor);
       print($texto);
        ?>
    </div>
</body>
</html>