<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php
        /* Definindo timezone */
        /*date_default_timezone_set("America/Sao_Paulo");*/
        /*date_default_timezone_get();*/
        date_default_timezone_set("America/Fortaleza");

        echo "Hoje é dia " . date("d/m/Y");
        echo "<br>";
        echo "e a hora atual é " . date("G:i:s T"); //T de timezone
        echo "<br>";

        /*Obtendo dados da região*/
        echo "<br>Dados da região: <br>";
        $tz = new DateTimeZone("America/Fortaleza");
        print_r($tz->getLocation());
        print_r(timezone_location_get($tz));
        echo "<br>";

        echo "<br>";
        echo date("d/m/Y"). ', nascer do sol: ' .DATE_SUNRISE(time(), SUNFUNCS_RET_STRING, -3.71667, -38.5, $zenith = ini_get("date.sunset_zenith"), -3);
        echo "<br>";
        echo date("d/m/Y"). ', pôr do sol: ' .DATE_SUNSET(time(), SUNFUNCS_RET_STRING,-3.71667, -38.5, $zenith = ini_get("date.sunset_zenith"), -3);
    ?>
</body>
</html>