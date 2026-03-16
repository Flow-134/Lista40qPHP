<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificador de Idade</title>
</head>
<body>
    <h2>Verificador de Maioridade (75 pessoas)</h2>
    <form method="POST">
        <p>Insira as 75 idades (separe por espaços):</p>
        <textarea name="idades" rows="10" cols="50" required placeholder="Ex: 15 22 18 30 12..."></textarea>
        <br><br>
        <button type="submit">Verificar Idades</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST['idades'];
        
        
        $lista_idades = preg_split('/[\s,]+/', trim($entrada));
        
        echo "<h3>Resultados:</h3>";
        echo "<ul>";

        foreach ($lista_idades as $indice => $idade) {
            if (is_numeric($idade)) {
                $status = ($idade >= 18) ? "<strong>MAIOR de idade</strong>" : "<em>menor de idade</em>";
                
                
                echo "<li>Pessoa " . ($indice + 1) . " ($idade anos): $status</li>";
            }
        }

        echo "</ul>";

        
        if (count($lista_idades) < 75) {
            echo "<p style='color:orange;'>Nota: Você inseriu apenas " . count($lista_idades) . " idades.</p>";
        }
    }
    ?>
</body>
</html>
