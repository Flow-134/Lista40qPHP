<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Transformaçao de valores</h2><br>
    <form method="post">
        <p>Digite o seu Valor em Reais <input type="number" name="real"></p>
        <p>Digite a Cotação do Dólar Atualmente<input type="number" name="cotacao" step="0.01"></p>
        <button type="submit">Converter em Dólar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cotacao = $_POST['cotacao'];
        $reais = $_POST["real"];
        $novoValor = $cotacao * $reais;
        echo "<h3>O valor em Dolar do valor inserido é: <strong>$novoValor</strong></h3>";
        
    }
    
    ?>
</body>
</html>