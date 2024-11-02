<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP Ex</title>
</head>
<body>
    <div>
        <?php
       $site = "Curso em Vídeo";
       $vetor = explode ("", $site);
       print_r($vetor);
        ?>
    </div>
</body>
</html>