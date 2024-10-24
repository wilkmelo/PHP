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
        $preco = $_get["p"];
        echo "O preço do produto e R$ $preco";
        $preco = $preco + ($preco*10/100);
        echo "<br/>E o novo preco com 10% de aumento de aumento sera R$ $preco";
        ?>
    </div>
</body>
</html>