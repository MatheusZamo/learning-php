<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de numeros</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section>
        <h1>Análisador de Numero Real</h1>
        <?php 
            $number = $_REQUEST["x"] ?? 0;
            $int = (int) $number;
            $fra = $number - $int;

            echo "<p>Analisando o número <strong>". number_format($number, 2, ",", ".") ."</strong> informado pelo usuário:</p>";
            echo "<ul>
            <li>A parte inteira do número é <strong>". number_format($int, 0, ",", ".") . "</strong></li>
            <li>A parte fracionária do número é <strong>" . number_format($fra, 2, ",", ".") . "</strong></li>
            </ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>

</html>