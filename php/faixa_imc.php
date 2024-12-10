<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<body>
    <div class="container">
        <?php
        // Inclui a função de cálculo do IMC
        require_once '../functions/calcula_imc.php';

        if (!empty($_POST['peso']) && !empty($_POST['altura']) && !empty($_POST['nome']) && !empty($_POST['idade'])) {
            // Captura os dados do formulário
            $nome = strtoupper($_POST['nome']);
            $idade = $_POST['idade'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            // Calcula o IMC usando a função externa
            $imc = calcularIMC($peso, $altura);

            echo "<div class='result'>";
            echo "<p><strong>$nome</strong>, de $idade anos, seu IMC é: " . number_format($imc, 2) . "</p>";

            // Classificação do IMC por faixa etária
            if ($idade < 20) {
                if ($imc < 18.5) {
                    echo "<p>Abaixo do peso!</p>";
                } elseif ($imc < 24.9) {
                    echo "<p>Peso normal!</p>";
                } elseif ($imc < 29.9) {
                    echo "<p>Sobrepeso!</p>";
                } else {
                    echo "<p>Obesidade!</p>";
                }
            } elseif ($idade < 65) {
                if ($imc < 18.5) {
                    echo "<p>Abaixo do peso!</p>";
                } elseif ($imc < 24.99) {
                    echo "<p>Parabéns, você está no seu peso normal!</p>";
                } elseif ($imc < 29.99) {
                    echo "<p>Sobrepeso!</p>";
                } elseif ($imc < 34.99) {
                    echo "<p>Obesidade I.</p>";
                } elseif ($imc < 39.99) {
                    echo "<p>Obesidade II.</p>";
                } else {
                    echo "<p>Obesidade III.</p>";
                }
            } else {
                if ($imc < 22) {
                    echo "<p>Abaixo do peso!</p>";
                } elseif ($imc < 27) {
                    echo "<p>Peso normal!</p>";
                } elseif ($imc < 30) {
                    echo "<p>Sobrepeso!</p>";
                } else {
                    echo "<p>Obesidade!</p>";
                }
            }

            // Exibe a data e hora atuais
            date_default_timezone_set('America/Sao_Paulo');
            echo "<p>Data e hora atuais: " . date('d/m/Y H:i:s') . "</p>";

            echo "</div>";
        } else {
            echo "<p>Por favor, preencha todos os campos do formulário.</p>";
        }
        ?>
    </div>
</body>
</html>
