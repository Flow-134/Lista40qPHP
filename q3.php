<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao3</title>
    <style>
        input {
            margin-top : 10px
        }
    </style>
</head>
<body>
    <h1>Questao3:</h1>
    <form method="post">
    Distância total (km): <input type="number" name="distancia" step="0.1" required><br>
    Combustível gasto (L): <input type="number" name="combustivel" step="0.1" required><br>
    <button type="submit">Calcular Consumo</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distancia = $_POST['distancia'];
    $combustivel = $_POST['combustivel'];

    
    if ($combustivel > 0) {
        $consumoMedio = $distancia / $combustivel;
        
        echo "<h3>O consumo médio é de: " . number_format($consumoMedio, 2, ',', '.') . " km/l</h3>";
    } 
}
?>

    
</body>
</html>