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
        <p>
            <?php 
                $response = $_GET['number'];
                $predecessor = $response - 1;
                $successor = $response + 1;

                echo "O número escolhido foi <strong>$response</strong>";
                echo "</br>O seu antecessor é $predecessor";
                echo "</br>O seu sucessor é $successor"
            ?>
        </p>

        <button onclick="javacript:history.go('-1')">⬅ Voltar</button>

    </section>
</body>

</html>