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
        date_default_timezone_set("America/Sao_Paulo");

        echo "Hoje é dia " . date("d/m/Y");
        echo "<br>";
        echo "e a hora atual é " . date("G:i:s T"); //T de timezone
    ?>
</body>
</html>