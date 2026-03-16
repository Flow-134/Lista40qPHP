<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Intervalo</title>
</head>
<body>
    <h2>Verificador de Intervalo [10 - 150]</h2>
    <form method="POST">
        <p>Insira os 80 números abaixo (separe por espaços ou quebra de linha):</p>
        <textarea name="lista_numeros" rows="10" cols="50" required placeholder="Ex: 5 10 150 200..."></textarea>
        <br><br>
        <button type="submit">Processar Números</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST['lista_numeros'];
        
        $numeros = preg_split('/[\s,]+/', trim($entrada));
        
        $contador_intervalo = 0;
        $total_lido = count($numeros);

        foreach ($numeros as $num) {
            if (is_numeric($num)) {
                if ($num >= 10 && $num <= 150) {
                    $contador_intervalo++;
                }
            }
        }

        echo "<h3>Resultado:</h3>";
        echo "Total de números digitados: $total_lido <br>";
        echo "<strong>Números entre 10 e 150 (inclusive): $contador_intervalo</strong>";
        
        if ($total_lido < 80) {
            echo "<p style='color:red;'>Aviso: Você digitou apenas $total_lido números. O exercício pedia 80.</p>";
        }
    }
    ?>
</body>
</html>
