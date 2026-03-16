<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Concessionária Carango Velho</title>
    
</head>
<body>
    <h1>🚗 Carango Velho - Sistema de Descontos</h1>
    
    <form method="POST">
        <p>Valor do Veículo: <input type="number" name="valor" step="0.01" required></p>
        <p>Ano do Veículo: <input type="number" name="ano" required></p>
        

        <input type="hidden" name="total_ate_2000" value="<?php echo isset($_POST['total_ate_2000']) ? $_POST['total_ate_2000'] : 0; ?>">
        <input type="hidden" name="total_geral" value="<?php echo isset($_POST['total_geral']) ? $_POST['total_geral'] : 0; ?>">

        <button type="submit" name="btn" value="S">Calcular Desconto</button>
        <button type="submit" name="btn" value="N">Parar (N) Não</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opcao = $_POST['btn'];
        
        if ($opcao == "N") {
            echo "<div class='resumo'>";
            echo "Encerrado. <br>";
            echo "Total de carros até o ano 2000: " . $_POST['total_ate_2000'] . "<br>";
            echo "Total geral de carros: " . $_POST['total_geral'];
            echo "</div>";
        } else {
            $valor = $_POST['valor'];
            $ano = $_POST['ano'];
            $total_ate_2000 = $_POST['total_ate_2000'];
            $total_geral = $_POST['total_geral'];

            if ($ano <= 2000) {
                $percentual = 0.12; 
                $total_ate_2000++;
            } else {
                $percentual = 0.07; 
            }

            $desconto = $valor * $percentual;
            $valor_final = $valor - $desconto;
            $total_geral++;

            echo "<div class='resultado'>";
            echo "Ano: $ano | Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
            echo "<strong>Valor a pagar: R$ " . number_format($valor_final, 2, ',', '.') . "</strong>";
            echo "</div>";

            
            echo "<script>
                document.getElementsByName('total_ate_2000')[0].value = '$total_ate_2000';
                document.getElementsByName('total_geral')[0].value = '$total_geral';
            </script>";
        }
    }
    ?>
</body>
</html>
