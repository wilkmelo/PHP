<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP</title>
</head>
<body>
    <div>
        <?php
        function soma ($a, $b) {
            $s = $a + $b;
            return $s;
        }
          $x = 3;
          $y = 4;
          $r = soma ($x, $y);
          echo "A soma entre $x e $y e igual a $r";
        ?>
    </div>
</body>
</html>