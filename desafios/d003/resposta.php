<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            const DOLAR =  4.97;
            $dinheiro = $_GET["dinheiro"] ?? "0";
            $dinheiro_convertido = $dinheiro / DOLAR;
            // $dinheiro_convertido_formatado = number_format($dinheiro_convertido, 2, ',', '.');
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            // echo "<p>Seus R$ $dinheiro equivalem a <strong>US$ $dinheiro_convertido_formatado</strong></p>";
            echo "Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dinheiro_convertido, "USD") . "</strong>";
            echo "<p><strong>Cotação fixa de ".numfmt_format_currency($padrao, DOLAR, "BRL") ."</strong> informada diretamente no código</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>