<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <?php
            //Cotação vinda da API do banco do brasil
            $inicio = date("m/d/Y", strtotime("-7 days"));
            $fim = date("m/d/Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url),true);
        
            //var_dump($dados);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
        
            //Valor que vc tem
            $real = $_GET["din"] ?? 0;
            //Equivalência em dólar
            $dolar = $real / $cotacao;
            //Mostrar resultado
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
                echo "<p>Hoje " . numfmt_format_currency($padrao, $real, "BRL") . " reais equivale em dólar a <strong>" . numfmt_format_currency($padrao,$dolar,"USD") .  " dólar</strong>.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>