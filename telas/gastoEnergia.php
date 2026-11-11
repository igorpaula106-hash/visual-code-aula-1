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
    <title>Gasto de Energia Elétrica</title>
</head>
<body>
    <h1>Calcular Gasto de Energia Elétrica</h1>
    <form method="POST">
        <label>Informe a potência do aparelho (em Watts): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o tempo de uso (em horas): </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
                $potencia  = $_POST['primeiroNumero'];
                $tempo     = $_POST['segundoNumero'];
                $resultado = $funcoes->gastoEnergia($potencia, $tempo);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "O consumo de energia é: " . $resultado . " kWh";
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>