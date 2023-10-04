<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../exercicios/ex004/style.css">
  <title>Desafio Antecessor e Sucessor</title>
</head>

<body>
  <section>
    <h1>Resultado final</h1>
    <?php
    $numero = $_GET["numero"] ?? "sem número";

    $antecessor = $numero - 1;
    $sucessor = $numero + 1;

    echo "<p>O número escolhido foi <strong>$numero</strong></p>"; // \n em vez de parágrafo também faz nova linha
    echo "<p>O seu <em>antecessor</em> é $antecessor</p>";
    echo "<p>O seu <em>sucessor</em> é $sucessor</p>";
    ?>

    <button onclick="javascript:history.go(-1)">&larr; Voltar</button>
  </section>
</body>

</html>
