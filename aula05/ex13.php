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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A media entre $nota1 e $nota2 e $m <br/>";
        /* $sit = ($m<6)?"REPROVADO":"APROVADO";
        echo "A situação do aluno e $sit"; */
        echo "A situação do aluno é " . (($m<6)?"REPROVADO":"APROVADO");
        ?>
    </div>
</body>
</html>