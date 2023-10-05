<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../exercicios/ex004/style.css">
  <title>Desafio Moeda Básico</title>
</head>

<body>
  <main>
    <h1>Conversor de Moedas</h1>
    <?php
    // Padrão para moeda. Desabilitada em servidor local, por isso foi preciso habilitar no php.ini o extension=intl e reiniciar o servidor)
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    // Formatter da biblioteca INTL, aquela usada no Ignite também existe no PHP moderno!

    $cotacao = 5.17;
    $reais = $_GET["reais"] ?? 0;
    $dolares = $reais / $cotacao;

    // Modo simples de formatação: number_format($reais / $cotacao, 2, ",", ".");

    echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong>.</p>";
    ?>
    <button onclick="javascript:history.go(-1)">&larr; Voltar</button>
  </main>
</body>

</html>
