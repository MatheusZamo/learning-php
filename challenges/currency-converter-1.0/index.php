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
        <h1>Conversor de Moedas v1.0</h1>
        <p>
            <?php 
            $valueDollar = 5.22;
            $valueUser = $_REQUEST['currency'] ?? 0;
            $currency = $valueUser / $valueDollar;

            //Codigo sem a biblioteca internacional intl
            //echo "Seus R\$" . number_format($valueUser, 2, ",", ".") . 
            //     " equivalem a US\$" . number_format($currency,2, ",", ".");

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