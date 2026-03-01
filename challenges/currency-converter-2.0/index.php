<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <p>
            <?php 
            //Definindo datas pelo sistema
            $start = date("m-d-Y", strtotime("-7 days"));
            $end = date("m-d-Y");
            //Utilizando a API do banco central 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $start . '\'&@dataFinalCotacao=\'' . $end . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $responseAPI = json_decode(file_get_contents($url), true);
            
            $valueDollar = $responseAPI['value'][0]['cotacaoCompra'];
            $valueUser = $_REQUEST['currency'] ?? 0;
            $currency = $valueUser / $valueDollar;
            
            //Formatação de moedas com internacionalização
            //Biblioteca intl (Internallization PHP)
            $default = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($default, $valueUser, "BRL") . " equivalem a <strong>" . 
               numfmt_format_currency($default, $currency, "USD") . "</strong>";
            ?>
        </p>

        <button onclick="javascript:history.go('-1')">⬅️ Voltar</button>
    </section>
</body>

</html>