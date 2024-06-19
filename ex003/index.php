<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #aaafff;
        }
    </style>
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        /*Tipos Escalares*/
        //0x = hexadecimal | 0b = binário | 0 = octal  
        //$num = 010;
        //echo "O valor da variável é $num";

        //$v = 300;
        //var_dump($v);

        // 3x10(2) 3 vezes 10 elevado a 2
        //$num = 3e2;
        //echo "O valor é $num <br>";
        //var_dump($num);

        /*Forçando variável - informando o tipo de variável antes do valor = coerção*/
        //$num = (int)3e2;
        //echo "O valor é $num <br>";
        //var_dump($num);


        //$num = (int)"950"; //coerção
        //var_dump($num);

        //$casado = false;
        //var_dump($casado);
        //echo "O valor para situação é $casado";

        //$vet = [6,2.5,"Maria",true,5];
        //var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>