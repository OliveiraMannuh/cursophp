<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>
<body>
    <?php 
        /*$real = $_GET ["din"] ?? 0;
        $padrao = ;
        $dolar = ;*/

        $inicio = date("m/d/Y", strtotime("-7 days"));
        $fim = date("m/d/Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url),true);
        
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        echo "<br>A cotação do dólar hoje é $cotacao";
    ?>
</body>
</html>