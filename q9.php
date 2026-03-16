<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <p>Valor do Depósito (R$): 
       <input type="number" name="deposito" step="0.01" required>
    </p>
    <button type="submit">Calcular Rendimento</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorDeposito = $_POST['deposito'];
    $taxaJuros = 0.007; 

    $rendimento = $valorDeposito * $taxaJuros;
    $valorTotal = $valorDeposito + $rendimento;

    echo "<h3>Resultado após 1 mês:</h3>";
    echo "Valor depositado: R$ " . number_format($valorDeposito, 2, ',', '.') . "<br>";
    echo "Rendimento do mês: R$ " . number_format($rendimento, 2, ',', '.') . "<br>";
    echo "<strong>Valor total acumulado: R$ " . number_format($valorTotal, 2, ',', '.') . "</strong>";
}
?>

</body>
</html>
