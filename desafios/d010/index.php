<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_atual = date('Y');
        $nascimento = $_GET['nascimento'] ?? 2000;
        $ano = $_GET['ano'] ?? $ano_atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano voce nasceu?</label>
            <input type="number" name="nascimento" id="idnascimento" value="<?=$nascimento?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
            <input type="number" name="ano" id="idano" value="<?=$ano?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main> 
    <section>
        <h2>Resultado</h2>
        <?php
            $idade = $ano - $nascimento; 
            echo "<p>Quem nasceu em $ano vai ter <strong>$idade anos</strong> em $ano_atual</p>"
        ?>
    </section>
</body>
</html>