<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Retroalimentados</title>
    <link rel="stylesheet" href="../../challenges/style.css">
</head>

<body>
    <?php 
        //Capturando os dados do Formulario Retroalimentado
        $value1 = $_GET['value1'] ?? 0;
        $value2 = $_GET['value2'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method='get'>
            <label for="value1">Valor 1</label>
            <input type="number" name="value1" value="<?php echo $value1 ?>">
            <label for="value2">Valor 2</label>
            <input type="number" name="value2" value="<?php echo $value2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $sum = $value1 + $value2;

            echo "<p>
                    A soma entre os valores $value1 e $value2 é
                    <strong>igual a $sum </strong>
                 </p>";
        ?>
    </section>
</body>

</html>