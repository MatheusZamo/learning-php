<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 
        $response = $_GET['number'];
        $predecessor = $response - 1;
        $successor = $response + 1;

        echo "<p>O número escolhido foi <strong>$response</strong></p>";
        echo "<p>O seu antecessor é $predecessor</p>";
        echo "<p>O seu sucessor é $successor</p>"
        ?>

        <button onclick="javacript:history.go('-1')">⬅ Voltar</button>

    </section>
</body>

</html>