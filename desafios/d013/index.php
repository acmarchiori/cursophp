<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_POST['valor'] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        // Utilizando uma variável auxiliar para não modificar $valor
        $valorAux = $valor;

        // Calcular a quantidade de cada nota
        $nota100 = floor($valorAux / 100);
        $valorAux %= 100;
        $nota50 = floor($valorAux / 50);
        $valorAux %= 50;
        $nota10 = floor($valorAux / 10);
        $valorAux %= 10;
        $nota5 = floor($valorAux / 5);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idvalor" step="5" value="<?=$valor?>">
            <p>*Notas disponíveis: R$100, R$ 50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main> 
    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao, $valor, "BRL")?> realizado</h2>
        <?php
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";

            echo "<ul>
                <li><img src='imagens/100-reais.jpg' alt='Nota de 100 reais' style='max-height: 45px;'> X$nota100</li>
                <li><img src='imagens/50-reais.jpg' alt='Nota de 50 reais' style='max-height: 45px;'> X$nota50</li>
                <li><img src='imagens/10-reais.jpg' alt='Nota de 10 reais' style='max-height: 45px;'>X$nota10</li>
                <li><img src='imagens/5-reais.jpg' alt='Nota de 5 reais' style='max-height: 45px;'>X$nota5</li>
            </ul>";
        ?>
    </section>
</body>
</html>