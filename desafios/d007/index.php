<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 1412;
        $salario_minimo = 1412;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="salario" name="salario" id="idsalario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrao, $salario_minimo, "BRL")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main> 
    <section>
        <h2>Resultado Final</h2>
        <?php
            $quociente = intdiv($salario, $salario_minimo);
            $resto = $salario % $salario_minimo; 
            echo "<p>Quem recebe um salário de ".numfmt_format_currency($padrao, $salario, "BRL"). " ganha <strong>$quociente salários mínimos</strong> + ".numfmt_format_currency($padrao, $resto, "BRL")."</p>"
        ?>
    </section>
</body>
</html>/opt/lampp/htdocs/cursophp/desafios/d001/resposta.php