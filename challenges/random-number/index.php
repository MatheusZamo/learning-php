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
        <p>
            <?php 
                $randomNumber = mt_rand(0, 100);

                echo "O número gerado foi $randomNumber";

            ?>
        </p>
        <button onclick="window.location.reload()">🔄 Gerar Outro</button>

    </section>
</body>

</html>