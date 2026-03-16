<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Digite um numero <input type="text" name="numero" required></p>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        if ($numero >= 10) {
            echo "O ceu esta lindo hoje";
        } else {
            echo "A vida nao é um morango";
        }


    }
    ?>
</body>
</html>