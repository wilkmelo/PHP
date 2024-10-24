<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <div>
        <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X e $x";
        echo "<br/>A variável ABC criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>