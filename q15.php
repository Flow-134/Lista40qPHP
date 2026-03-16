<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Digite um número<input type="number" name="numero"></p>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        $num = $_POST['numero'];
    if ($num > 100) { 
        echo "o Numero $num esta entre 100 e 200";
    } else { 
        echo "o Número $num nao esta entre 100 e 200";
    }
    ?>
</body>
</html>