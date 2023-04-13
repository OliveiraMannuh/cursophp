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

    <main>
        <h1 style="text-align: center;">Resultado</h1>
        <p>
            <?php
                $number = $_GET ["number"] ?? 0;
                echo "<p>O número escolhido foi <strong>$number</strong><br>O número <em>antecessor</em> é: " . ($number - 1) . "<br>O número <em>sucessor</em> é: " .($number + 1) . "</p>";
            ?>
        </p>

        <!--<button onclick="javascript: history.go(-1)">&#x2b05;Voltar</button>-->
        <!--<p><a href="javascript: history.go(-1)">Voltar para a página anterior utilizando histórico</a></p>-->
        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button> <!-- Voltar sem a informação digitada -->
          
    </main>
</body>
</html>