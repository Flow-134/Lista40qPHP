<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Análise de Lucro e Prejuízo</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .lucro { color: green; font-weight: bold; }
        .prejuizo { color: red; font-weight: bold; }
        .empate { color: blue; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Análise de 40 Produtos</h2>
    <form method="POST">
        <p>Digite o <strong>Preço de Custo</strong> e o <strong>Preço de Venda</strong> separados por vírgula (um por linha):</p>
        <textarea name="dados_produtos" rows="15" cols="50" required placeholder="Exemplo:&#10;50.00, 75.00&#10;100.00, 80.00"></textarea>
        <br><br>
        <button type="submit">Analisar Produtos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = trim($_POST['dados_produtos']);
        $linhas = explode("\n", $entrada);
        
        $somaCusto = 0;
        $somaVenda = 0;
        $totalProdutos = 0;

        echo "<h3>Resultados Individuais:</h3><ul>";

        foreach ($linhas as $linha) {
            $valores = explode(",", $linha);
            
            if (count($valores) == 2) {
                $custo = (float)trim($valores[0]);
                $venda = (float)trim($valores[1]);
                $totalProdutos++;
                
                $somaCusto += $custo;
                $somaVenda += $venda;

                if ($venda > $custo) {
                    $status = "<span class='lucro'>LUCRO</span>";
                } elseif ($venda < $custo) {
                    $status = "<span class='prejuizo'>PREJUÍZO</span>";
                } else {
                    $status = "<span class='empate'>EMPATE</span>";
                }

                echo "<li>Produto $totalProdutos: Custo R$ ".number_format($custo, 2, ',', '.').
                     " | Venda R$ ".number_format($venda, 2, ',', '.')." -> $status</li>";
            }
        }
        echo "</ul>";

        if ($totalProdutos > 0) {
            $mediaCusto = $somaCusto / $totalProdutos;
            $mediaVenda = $somaVenda / $totalProdutos;

            echo "<h3>Resumo das Médias:</h3>";
            echo "Média de Preço de Custo: R$ " . number_format($mediaCusto, 2, ',', '.') . "<br>";
            echo "Média de Preço de Venda: R$ " . number_format($mediaVenda, 2, ',', '.') . "<br>";
            echo "Total de produtos analisados: $totalProdutos";
        }
    }
    ?>
</body>
</html>
