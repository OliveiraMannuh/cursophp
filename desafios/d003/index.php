<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <?php
            $cotacao = 4.91;
            $real = 10;
            $dolar = $real/$cotacao;
            echo "Hoje R$ " . number_format($real,2,",",".") . " reais equivale em dólar a <strong>US$ " . number_format($dolar,2,",",".") . " dólar</strong>.";
        ?>
    </main>
</body>
</html>