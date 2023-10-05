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
    // Datas para atualizar as semanas em tempo real:
    $dataInicio = date("m-d-Y", strtotime("-7 days")); // Semana atrás
    $dataFim = date("m-d-Y");
    // Usando API do BACEN em PHP (não esquecer de escapar com \ as aspas das datas):
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataInicio . '\'&@dataFinalCotacao=\'' . $dataFim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);
    // var_dump($dados["value"][0]["cotacaoCompra"]); var_dump é o nosso console.log do php hehe

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    $cotacao = $dados["value"][0]["cotacaoCompra"];
    // echo "teste de cotacao $cotacao";

    $reais = $_GET["reais"] ?? 0;
    $dolares = $reais / $cotacao;

    echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong>.</p>";

    echo "<p>*Cotação obtida diretamente do site do <a target='_blank' href='https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994'>Banco Central do Brasil</a></p>"
    ?>
    <button onclick="javascript:history.go(-1)">&larr; Voltar</button>
  </main>
</body>

</html>
