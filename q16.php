<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Digite o nome do aluno:  <input type="text" name="aluno"></p>
        <p>Digite a primeira nota<input type="number" name="nota1" required></p>
        <p>Digite a segunda nota<input type="number" name="nota2" required></p>
        <p>Digite a terceira nota<input type="number" name="nota3" required></p>
        <button type="submit" >Averiguar Aluno</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aluno = $_POST ['aluno'];
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];
        $calcularMediaAl = ($n1 + $n2 + $n3) / 3;
        $resultado = $calcularMediaAl;
        if ($resultado >= 7.0  ) { 
            echo "O aluno $aluno foi aprovado nesse semestre com a média $resultado"; 
        } else { 
            echo "O aluno $aluno foi reprovado nesse semestre com a média $resultado";
        }
    }        
    ?>
</body>
</html>