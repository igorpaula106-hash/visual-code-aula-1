<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Números Pares (FOR)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Contar Quantos Números são Pares (20 Números)</h1>
    <form method="POST">
        <label>Número 1: </label><input type="number" name="num1" required/><br><br>
        <label>Número 2: </label><input type="number" name="num2" required/><br><br>
        <label>Número 3: </label><input type="number" name="num3" required/><br><br>
        <label>Número 4: </label><input type="number" name="num4" required/><br><br>
        <label>Número 5: </label><input type="number" name="num5" required/><br><br>
        <label>Número 6: </label><input type="number" name="num6" required/><br><br>
        <label>Número 7: </label><input type="number" name="num7" required/><br><br>
        <label>Número 8: </label><input type="number" name="num8" required/><br><br>
        <label>Número 9: </label><input type="number" name="num9" required/><br><br>
        <label>Número 10: </label><input type="number" name="num10" required/><br><br>
        <label>Número 11: </label><input type="number" name="num11" required/><br><br>
        <label>Número 12: </label><input type="number" name="num12" required/><br><br>
        <label>Número 13: </label><input type="number" name="num13" required/><br><br>
        <label>Número 14: </label><input type="number" name="num14" required/><br><br>
        <label>Número 15: </label><input type="number" name="num15" required/><br><br>
        <label>Número 16: </label><input type="number" name="num16" required/><br><br>
        <label>Número 17: </label><input type="number" name="num17" required/><br><br>
        <label>Número 18: </label><input type="number" name="num18" required/><br><br>
        <label>Número 19: </label><input type="number" name="num19" required/><br><br>
        <label>Número 20: </label><input type="number" name="num20" required/><br><br>

        <button type="submit">Contar Pares
        <?php
            if(isset($_POST['num1'])){
                $n1  = (int)$_POST['num1'];
                $n2  = (int)$_POST['num2'];
                $n3  = (int)$_POST['num3'];
                $n4  = (int)$_POST['num4'];
                $n5  = (int)$_POST['num5'];
                $n6  = (int)$_POST['num6'];
                $n7  = (int)$_POST['num7'];
                $n8  = (int)$_POST['num8'];
                $n9  = (int)$_POST['num9'];
                $n10 = (int)$_POST['num10'];
                $n11 = (int)$_POST['num11'];
                $n12 = (int)$_POST['num12'];
                $n13 = (int)$_POST['num13'];
                $n14 = (int)$_POST['num14'];
                $n15 = (int)$_POST['num15'];
                $n16 = (int)$_POST['num16'];
                $n17 = (int)$_POST['num17'];
                $n18 = (int)$_POST['num18'];
                $n19 = (int)$_POST['num19'];
                $n20 = (int)$_POST['num20'];

                $resultado = $funcoes->contarParesVinte(
                    $n1, $n2, $n3, $n4, $n5,
                    $n6, $n7, $n8, $n9, $n10,
                    $n11, $n12, $n13, $n14, $n15,
                    $n16, $n17, $n18, $n19, $n20
                );
            }
        ?>
        </button>
    </form>
    <div class="resultado-box">
        <?php
            if(isset($_POST['num1'])){
                echo "Quantidade de números pares digitados: " . $resultado;
            }else{
                echo "Preencha todos os 20 campos!";
            }
        ?>
    </div>
    <a class="btn-voltar" href="../index.php">← Voltar ao Menu Principal</a>
</body>
</html>