<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <p>Digite um valor em Graus Celsius: <input type="number" name="temp" required>
    <button type="submit"> Transformar em Fahrenheit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperaturaC = $_POST['temp'];
        $converter = $temperaturaC * 1.8 + 32;
        $novoValor = $converter;

        echo "<h3>O novo valor convertido é $novoValor</h3>";

    }
    ?>
</body>
</html>