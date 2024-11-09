<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes</title>
</head>
<body>
    <div>
        <pre>
        <?php
        $v = array("nome"=> "Ana", 
                   "idade"=> 23,
                   "peso"=> 65.5);
        foreach($v as $k => $c){
         echo "O acampo $k possui o conteudo $c <br/>";
        }
        ?>
        </pre>
    </div>
</body>
</html>