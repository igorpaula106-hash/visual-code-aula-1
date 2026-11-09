<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes = new Funcoes();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Compostos</title>
</head>
<body>
    <h1>Calcular Montante (Juros Compostos)</h1>
    <form method="POST">
        <label>Informe o Capital Inicial (R$): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a Taxa de Juros (%) ao período: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o Tempo (períodos): </label>
        <input type="number" step="any" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero']) && isset($_POST['terceiroNumero'])){
                $capital   = $_POST['primeiroNumero'];
                $taxa      = $_POST['segundoNumero'];
                $tempo     = $_POST['terceiroNumero'];
                $resultado = $funcoes->jurosCompostos($capital, $taxa, $tempo);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "O montante final é: R$ " . number_format($resultado, 2, ',', '.');
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>