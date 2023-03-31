<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <?php 
            $number = $_GET ["number"];           
            echo "<p>O número escolhido foi <strong>$number</strong><br>O número <i>antecessor</i> é: " . ($number - 1) . "<br>O número <i>sucessor</i> é: " .($number + 1) . "</p>";
        ?>
        
        <p><a href="javascript: history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>