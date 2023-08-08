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
        <h3 style="text-align: center;">Conversor de Moedas</h3>
        <?php
            $cotacao = 4.91;
            $real = $_GET["din"] ?? 0;
            $dolar = $real/$cotacao;

            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

            echo "<p>Hoje " . numfmt_format_currency($padrao, $real, "BRL") . " reais equivale em dólar a <strong>" . numfmt_format_currency($padrao,$dolar,"USD") .  " dólar</strong>.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>