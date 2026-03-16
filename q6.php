<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <p>Valor de A: <input type="number" name="valorA" required></p>
    <p>Valor de B: <input type="number" name="valorB" required></p>
    <button type="submit">Trocar Valores</button>
</form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['valorA'];
    $b = $_POST['valorB'];

    echo "<h3>Antes da troca:</h3>";
    echo "A = $a | B = $b";

    
    $temp = $a; 
    $a = $b;    
    $b = $temp; 

    echo "<h3>Depois da troca:</h3>";
    echo "A agora é: <strong>$a</strong><br>";
    echo "B agora é: <strong>$b</strong>";
}
?>

</body>
</html>