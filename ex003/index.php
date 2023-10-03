<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
    // Tipos primitivos ESCALARES:
    // string, int/integer, float/double ("real" desativado a partir do php 7.4) e boolean/bool

    // 0x = hexadecimal 0b = binário 0 = Octal
    $numero = 0x1A; // A = 10; 1 na 2ª casa = 1x16
    echo "<p>O valor da variável é $numero</p>";

    $valor = 300;
    var_dump($valor); // Tipo do valor

    $numero_e2 = 3e2; // 3 * 10**2
    $numero_e3 = (int) 8e3; // 8 * 10**3
    echo "<p>O valor de 3e2 é $numero_e2 e 8e3 é $numero_e3</p>";

    var_dump($numero_e2); // Potências são consideradas float no PHP
    var_dump($numero_e3); // Coerção para int/integer (ou casting de tipo)

    $ehnoob = true; // imprimido é 1 e falso é vazio/0/null
    var_dump($ehnoob);

    echo "<p></p>";
    // Primitivos COMPOSTOS:
    // array e object

    $vetor = [6, 2, 9, "Maria", 3, 5, false];
    var_dump($vetor);
    echo "<p></p>";

    class Pessoa {
      private string $nome;
    }

    $pessoa = new Pessoa();
    var_dump($pessoa)

    // Primitivos ESPECIAIS (mais pra frente do curso): null, resource, callabe, mixed
  ?>
</body>

</html>
