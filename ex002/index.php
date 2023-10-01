<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>
  <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("D/d/M/Y");
    echo " e a hora atual e timezone são " . date("G:i:s T")
    // -03 é nossa timezone. A timezone padrão do servidor da apache é CET em vez de GMT-03
  ?>
</body>

</html>
