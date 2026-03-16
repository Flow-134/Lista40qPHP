<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao5</title>
</head>
<body>
    <form method="post">
        Digite o nome do Aluno<input type="text" name="aluno"><br>
       <p> Nota 1: <input type="number" name="nota1" step="0.1" required></p>
       <p> Nota 2: <input type="number" name="nota2" step="0.1" required></p>
       <p> Nota 3: <input type="number" name="nota3" step="0.1" required></p>
       <button type="submit">calcular Media</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST ['aluno'];
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];
        $calcularMediaAl = ($n1 + $n2 + $n3) / 3;
        $resultado = $calcularMediaAl;
        echo "<h3>A média do aluno:</h3>";
        echo "O aluno <strong>$nome</strong> obteve a média: <strong>" . number_format($calcularMediaAl, 2, ',', '.') . "</strong>";
    }
    ?>
</body>
</html> 