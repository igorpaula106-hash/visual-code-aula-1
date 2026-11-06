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
    <title>Volume da Caixa Retangular</title>
</head>
<body>
    <h1>Calcular o Volume de uma Caixa Retangular</h1>
    <form method="POST">
        <label>Informe o Comprimento: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a Largura: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe a Altura: </label>
        <input type="number" step="any" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero']) && isset($_POST['terceiroNumero'])){
                $comprimento = $_POST['primeiroNumero'];
                $largura     = $_POST['segundoNumero'];
                $altura      = $_POST['terceiroNumero'];
                $resultado   = $funcoes->volumeCaixa($comprimento, $largura, $altura);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "O volume da caixa é: " . $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>