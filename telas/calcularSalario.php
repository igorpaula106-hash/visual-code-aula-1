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
    <title>Calcular Salário</title>
</head>
<body>
    <h1>Calcular Salário Mensal</h1>
    <form method="POST">
        <label>Informe o valor por hora (R$): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe as horas trabalhadas no mês: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
                $valorHora        = $_POST['primeiroNumero'];
                $horasTrabalhadas = $_POST['segundoNumero'];
                $resultado        = $funcoes->calcularSalario($valorHora, $horasTrabalhadas);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "O salário mensal é: R$ " . $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>