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
    <title>Soma e Média</title>
</head>
<body>
    <h1>Calcular Soma e Média de 3 Números</h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o segundo número: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o terceiro número: </label>
        <input type="number" step="any" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero']) && isset($_POST['terceiroNumero'])){
                $n1 = $_POST['primeiroNumero'];
                $n2 = $_POST['segundoNumero'];
                $n3 = $_POST['terceiroNumero'];
                $resultado = $funcoes->somaEMediaTresNumeros($n1, $n2, $n3);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>