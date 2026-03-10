<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao2</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero1">Numero1</label>
        <input type="number" id = "numero1" name = "numero1">
        <br>
        <label for="numero2">Numero2</label>
        <input type="number" id = "numero2" name = "numero2"><br></br>
        <input type="submit" value = "soma" name="soma">
        <input type="submit" value = "Subtração" name="sub">
        <input type="submit" value = "Multiplicação" name="mult">
        <input type="submit" value = "Divisão" name="divi">
    </form>
    <?php
    if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
        if(isset($_POST['soma'])) {
            echo "<br>Resultado da soma: " .$numero1 + $numero2;
        }
        if(isset($_POST['sub'])) {
            echo "<br>Resultado da Subtração: " .$numero1 - $numero2;
        }
        if(isset($_POST['mult'])) {
            echo "<br>Resultado da Multiplicação: " .$numero1 * $numero2;
        }
        if(isset($_POST['divi'])) {
            echo "<br>Resultado da Divisão: " .$numero1 / $numero2;
        }
        
    }

    ?>
</body>
</html>