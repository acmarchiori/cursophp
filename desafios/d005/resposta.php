<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero_real = $_POST["numero"] ?? "0";
            // $parte_inteira = floor($numero_real);
            // $parte_fracionaria = fmod($numero_real, 1);
            $parte_inteira = (int) $numero_real;
            $parte_fracionaria = $numero_real - $parte_inteira;

            echo "<p>Analisando o número <strong> ".number_format($numero_real, 3, ',', '.')."</strong> informado pelo usuário:</p>";
            echo "<ul>
                    <li>A parte inteira do número é <strong>".number_format($parte_inteira, 0, ',', '.')."</strong></li>
                    <li>A parte fracionária do número é <strong>".number_format($parte_fracionaria, 3, ',', '.')."</strong></li>
                </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>    
</body>
</html>