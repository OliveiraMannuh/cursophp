<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #aaafff;
        }
    </style>
    <title>Testando strings</title>
</head>
<body>
    <h4>
        <?php
        /* Tipos de String
        Double Quoted = aspas duplas → "curso"
        → Interpretação do conteúdo da string, ou seja, o conteúdo é interpretado.
        Ex: "PHP \u{1F418}"
        Single Quoted = aspas simples → 'curso'
        → Não interpreta o conteúdo, apenas exibe o conteúdo
        */
       
        echo "PHP com aspas duplas, interpretando o conteúdo: \u{1F418}";
        echo "<br>";
        echo 'PHP com aspas simples, não interpreta o conteúdo: \u{1F418}';
        echo "<br>";
        echo "Concatenando conteúdo: <br>";
        echo "curso" . "PHP";

        /*CONTANTES*/
        const ESTADO = "CE \u{1F499}";
        echo "<br> Moro no " . ESTADO ;

        echo "<br>Estamos no ano " . date('Y');

         /* Concatenação: Juntar uma string na outra: "" . ""
        */
        echo "<br>";
        $nome = "Manuela";
        $sobrenome = "Oliveira";
        $apelido = "cute";
        echo "$nome \"$apelido\" $sobrenome";

        /* Sequências de escape
        \n Nova linha
        \t Tabulação horizontal
        \\ Barra invertida
        \$ Sinal de cifrão
        \u{} codepoint Unicode
        */

        /* Sintaxe Heredoc: string gerada em múltiplas linhas 
        FRASE → Identificador da string
        */
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
            <br>Estou estudando $curso \u{1F596} em $ano para reforçar meu conhecimento
        FRASE;

        /* Sintaxe Nowdoc → aceita multiplas linhas, mas não interpreta, semelhante ao comportamento da aspas simples
        */
        $situacao ="nova";
        $teste = "testando";
        echo <<< 'TEXTO'
        <br>Olá, isso é uma $situacao de $teste
        estou revisando o conteúdo de PHP.
        TEXTO
        ?>
    </h4>
</body>
</html>