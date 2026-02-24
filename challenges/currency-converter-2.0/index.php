<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
        date_default_timezone_set('America/Sao_Paulo');

        $moeda = "USD";
        $data = date("m-d-Y");
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaDia(moeda=@moeda,dataCotacao=@dataCotacao)?@moeda='{$moeda}'&@dataCotacao='{$data}'&\$format=json";

        $response = file_get_contents($url);
        $dados = json_decode($response, true);
        
        if (!empty($dados['value'])) {
            $cotacao = $dados['value'][0];
            echo "Cotação do Dólar em {$data}:\n";
            echo "Compra: R$ " . number_format($cotacao['cotacaoCompra'], 4, ',', '.') . "\n";
            echo "Venda: R$ " . number_format($cotacao['cotacaoVenda'], 4, ',', '.') . "\n";
} 
        
        ?>

        <button onclick="javascript:history.go('-1')">⬅️ Voltar</button>
    </section>
</body>

</html>