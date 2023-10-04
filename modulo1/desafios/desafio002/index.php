<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../exercicios/ex004/style.css">
  <title>Desafio Antecessor e Sucessor</title>
</head>

<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    $minValue = 0;
    $maxValue = 100;
    $randomValue = mt_rand($minValue, $maxValue);

    // Algoritmo rand() é de 1951, considerado antigo e lento. Usada antes da versão 7.1 no PHP. Mas, a partir da 7.1, a rand() aponta para a:
    // mt_rand() - 1997 - é 4x mais rápido
    // random_int() gera números aleatórios CRIPTOGRAFICAMENTE SEGUROS. Ideal para casos de segurança.

    echo "Gerando um número aleatório entre $minValue e $maxValue...";
    echo "<p>O valor gerado foi <strong>$randomValue</strong></p>";
    ?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
  </main>
</body>

</html>
