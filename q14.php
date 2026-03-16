<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Digite um número inteiro:<input type="number" name="a" required></p>
        <p>Digite um número inteiro:<input type="number" name="b" required></p>
        <button type="submit"> Averiguar numeros </button>
    </form>
    
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        if ($a > $b ) {
            echo "O Número $a é maior que $b";
        } elseif ($a == $b) { echo ("OS números $a e $b possuem o mesmo valor");
        } else { echo "O número $b é maior que $a";}

    }
    
    ?>
</body>
</html>