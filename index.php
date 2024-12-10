<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <div class="container">
        <h1>Cálculo do IMC</h1>

        <!-- Formulário -->
        <form method="POST" action="php/faixa_imc.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <label for="peso">Peso (em kg):</label>
            <input type="number" step="0.01" id="peso" name="peso" required>

            <label for="altura">Altura (em metros):</label>
            <input type="number" step="0.01" id="altura" name="altura" required>

            <input type="submit" value="Calcular IMC">
        </form>
    </div>
</body>
</html>
