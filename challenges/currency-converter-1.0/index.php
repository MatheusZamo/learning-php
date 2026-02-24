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
        <?php 
        $valueDollar = 5.22;
        $valueUser = $_GET['currency'];
        $currency = $valueUser / $valueDollar;
        $result = round($currency, 2);

        echo "<p>Seus R$ $valueUser equivalem a <strong>US$ $result</strong></p>";
        echo "<p><strong>*Cotação fixa de R$ $valueDollar</strong> informada diretamente no código</p>";

        ?>

        <button onclick="javascript:history.go('-1')">⬅️ Voltar</button>
    </section>
</body>

</html>