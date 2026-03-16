<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Seleção Serviço Militar</title>
    <style>
        .apto { color: green; font-weight: bold; }
        .inapto { color: red; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Verificação de Aptidão Militar</h2>
    <form method="POST">
        <p>Digite os dados (Nome, Sexo, Idade, Saude) - Um por linha:</p>
        <textarea name="dados_pessoas" rows="10" cols="70" required 
        placeholder="Exemplo:&#10;João Silva, M, 18, Boa&#10;Maria Souza, F, 19, Boa&#10;Pedro Rocha, M, 17, Ruim"></textarea>
        <br><br>
        <button type="submit">Analisar Candidatos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $linhas = explode("\n", trim($_POST['dados_pessoas']));
        
        $totalAptos = 0;
        $totalInaptos = 0;

        echo "<table><tr><th>Nome</th><th>Sexo</th><th>Idade</th><th>Saúde</th><th>Resultado</th></tr>";

        foreach ($linhas as $linha) {
            $dados = explode(",", $linha);
            
            if (count($dados) == 4) {
                $nome  = trim($dados[0]);
                $sexo  = strtoupper(trim($dados[1]));
                $idade = (int)trim($dados[2]);
                $saude = mb_strtolower(trim($dados[3]), 'UTF-8');

                if ($sexo == 'M' && $idade >= 18 && ($saude == 'boa' || $saude == 'ótima')) {
                    $resultado = "<span class='apto'>APTO</span>";
                    $totalAptos++;
                } else {
                    $resultado = "<span class='inapto'>INAPTO</span>";
                    $totalInaptos++;
                }

                echo "<tr><td>$nome</td><td>$sexo</td><td>$idade</td><td>$saude</td><td>$resultado</td></tr>";
            }
        }
        echo "</table>";

        echo "<h3>Resumo Final:</h3>";
        echo "Total de Aptos: $totalAptos <br>";
        echo "Total de Inaptos: $totalInaptos <br>";
        echo "Total Geral: " . ($totalAptos + $totalInaptos);
    }
    ?>
</body>
</html>
