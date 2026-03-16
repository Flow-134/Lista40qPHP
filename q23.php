<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Números</title>
</head>
<body>
    <form method="POST">
        <p>Digite um número: <input type="number" name="numero" required></p>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['numero'];

        
        if ($n > 80 || $n < 25 || $n == 40) {
            echo "<h3>Atenção: O número $n atende aos critérios!</h3>";
            
            if ($n > 80) echo "o numero é maior que 80.";
            elseif ($n < 25) echo "o numero é menor que 25.";
            else echo "o numero é exatamente igual a 40.";
        } else {
            echo "<h3>O número $n não se encaixa nas regras.</h3>";
        }
    }
    ?>
</body>
</html>
