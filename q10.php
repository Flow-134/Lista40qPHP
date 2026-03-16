<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja Mamão com Açúcar</title>
</head>
<body>
    <h2>Loja Mamão com Açúcar - Parcelamento</h2>
    <form method="post">
        <label>Valor Total da Compra (R$):</label>
        <input type="number" name="valor_compra" step="0.01" required>
        <button type="submit">Calcular Prestações</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorTotal = $_POST['valor_compra'];
        
        $valorPrestacao = $valorTotal / 5;

        echo "<hr>";
        echo "Valor total da compra: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
        echo "Pagamento: <strong>5 prestações de R$ " . number_format($valorPrestacao, 2, ',', '.') . "</strong> sem juros.";
    }
    ?>
</body>
</html>
