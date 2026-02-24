<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section>
        <h1>Trabalhando com Números Aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>

        <?php 
        $randomNumber = random_int(0, 100);

        echo "<p>O número gerado foi $randomNumber</p>";

        ?>

        <button onclick="window.location.reload()">🔄 Gerar Outro</button>

    </section>
</body>

</html>