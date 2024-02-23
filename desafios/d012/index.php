<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $tempo = $_POST['tempo'] ?? 0
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="tempo">Qual é o total de tempo?</label>
            <input type="number" name="tempo" id="idtempo" value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
            $semanas = floor($tempo / (60 * 60 * 24 * 7));
            $dias = floor(($tempo % (60 * 60 * 24 * 7)) / (60 * 60 * 24));
             $horas = floor(($tempo % (60 * 60 * 24)) / (60 * 60));
            $minutos = floor(($tempo % (60 * 60)) / 60);
            $segundos = $tempo % 60;

            echo "<p>Analisando o valor que você digitou, <strong>$tempo segundos</strong> equivalem a um total de:</p>";

            echo "<ul>
            <li>$semanas semanas</li>
            <li>$dias dias</li>
            <li>$horas horas</li>
            <li>$minutos minutos</li>
            <li>$segundos segundos</li>
            </ul>";
        ?>
    </section> 
</body>
</html>