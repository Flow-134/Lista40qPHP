<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Digite um valor de um produto: <input type="number" name="produto" required></p>
        <p>Digite um acrescimo ao produto: <input type="number" name="acrescimo" step="0.1" required></p>
        <button type="submit">Acrescentar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = $_POST['produto'];
        $acrescimo = $_POST['acrescimo'];
        $novoValor = $produto * $acrescimo;
        
        echo "<h3> Preço com acréscimo: <strong>R$ " . number_format($novoValor, 2, ',', '.') . "</strong></h3>";
}
?>

</body>
</html>