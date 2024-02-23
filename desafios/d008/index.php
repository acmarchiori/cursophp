<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['n1'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Número</label>
            <input type="number" name="n1" id="idn1" min="1" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main> 
    <section>
        <h2>Resultado Final</h2>
        <?php
            $raizQuadrada = sqrt($numero);
            $raizCubica = pow($numero, 1/3);
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
            echo "<ul>
                    <li>A sua raiz quadrada é <strong>".number_format($raizQuadrada, 3, ',', '.')."</strong></li>
                    <li>A sua raiz cubica é <strong>".number_format($raizCubica, 3, ',', '.')."</strong></li>
                </ul>"
        ?>
    </section>
</body>
</html>