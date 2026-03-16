<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qeustao4</title>
</head>
<body>
    <form method="post">
    Nome do Vendedor: <input type="text" name="nome" required><br>
    Salário Fixo (R$): <input type="number" name="salario_fixo" step="0.01" required><br>
    Total de Vendas (R$): <input type="number" name="total_vendas" step="0.01" required><br>
    <button type="submit">Calcular Salário Final</button>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $salarioFixo = $_POST['salario_fixo'];
        $vendasMes = $_POST['total_vendas'];

        $comissao = $vendasMes * 0.15;
        $salarioFinal = $salarioFixo + $comissao;

        echo "<h3>Resumo do Mês:</h3>";
        echo "Vendedor: <strong>$nome</strong><br>";
        echo "Salário Final (com 15% de comissão): <strong>R$ " . number_format($salarioFinal, 2, ',', '.') . "</strong>";
        echo "Salário Fixo: R$ " . number_format($salarioFixo, 2, ',', '.') . "<br>";
    }
    
    ?>
</body>
</html> 