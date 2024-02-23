<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_POST['preco'] ?? 0;
        $percentual = $_POST['percentual'] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idpreco" value="<?=$preco?>">
            <label for="numero">Qual será o percentual do reajuste? (<strong><span id="percentual_valor"><?=$percentual?></span>%</strong>)</label>
            <input type="range" name="percentual" id="idpercentual" min="0" max="100" value="<?=$percentual?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $reajustado = $preco + ($preco * $percentual / 100);
            echo "<p>O produto que custava ".numfmt_format_currency($padrao, $preco, "BRL"). ", com <strong>$percentual% de aumento</strong> vai passar a custar <strong>".numfmt_format_currency($padrao, $reajustado, "BRL")." </strong>a partir de agora.</p>"
        ?>
    </section> 
    <script>
        // Atualizar o valor exibido conforme o usuário move o controle deslizante
        document.getElementById('idpercentual').addEventListener('input', function() {
            document.getElementById('percentual_valor').textContent = this.value;
        });
    </script>
</body>
</html>