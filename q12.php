<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Custo de Veículo</title>
</head>
<body>
    <h2>Cálculo do Custo ao Consumidor</h2>
    
    <form method="POST">
        <label>Custo de Fábrica (R$):</label>
        <input type="number" step="0.01" name="custo_fabrica" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $custo_fabrica = $_POST['custo_fabrica'];

        
        $valor_com_impostos = $custo_fabrica * 1.45;

        $custo_final = $valor_com_impostos * 1.28;

        echo "<h3>Resultado:</h3>";
        echo "Custo de Fábrica: R$ " . number_format($custo_fabrica, 2, ',', '.') . "<br>";
        echo "<strong>Custo ao Consumidor: R$ " . number_format($custo_final, 2, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>

</body>
</html>