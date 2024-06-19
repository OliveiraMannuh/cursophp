<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #aaaadc;
        }
    </style>
    <title>Arquivo teste</title>
</head>
<body>
    <p>
        <?php 
            $nome = 'Manuela';
            $sobrenome = 'Oliveira';
            const PAIS = 'Brasil'; //declarando constante, não tem cifrão na frente → não muda            
            echo "Olá, $nome $sobrenome, espero que goste do " . PAIS . "!";
        ?>
    </p>
</body>
</html>