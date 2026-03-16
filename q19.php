<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h2>Cadastro de Nome e Sexo (56 pessoas)</h2>
    <form method="POST">
        <p>Digite o <strong>Nome</strong> e o <strong>Sexo (M ou F)</strong> separados por vírgula (um por linha):</p>
        <textarea name="dados" rows="15" cols="60" required placeholder="Exemplo:&#10;João, M&#10;Maria, F"></textarea>
        <br><br>
        <button type="submit">Processar Lista</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = trim($_POST['dados']);
        $linhas = explode("\n", $entrada);
        $totalHomens = 0;
        $totalMulheres = 0;

        echo "<h3>Listagem Individual:</h3><ul>";

        foreach ($linhas as $linha) {
           
            $partes = explode(",", $linha);
            
            if (count($partes) == 2) {
                $nome = trim($partes[0]);
                $sexo = strtoupper(trim($partes[1])); 

                if ($sexo == 'M') {
                    echo "<li>$nome é <strong>Homem</strong></li>";
                    $totalHomens++;
                } elseif ($sexo == 'F') {
                    echo "<li>$nome é <strong>Mulher</strong></li>";
                    $totalMulheres++;
                } else {
                    echo "<li>$nome: Sexo inválido (use M ou F)</li>";
                }
            }
        }
        echo "</ul>";

        echo "<h3>Resumo Total:</h3>";
        echo "Total de Homens: $totalHomens <br>";
        echo "Total de Mulheres: $totalMulheres <br>";
        echo "Total de Pessoas processadas: " . ($totalHomens + $totalMulheres);
    }
    ?>
</body>
</html>
