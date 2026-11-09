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
    <title>Calcular Hipotenusa</title>
</head>
<body>
    <h1>Calcular a Hipotenusa de um Triângulo Retângulo</h1>
    <form method="POST">
        <label>Informe o primeiro cateto: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o segundo cateto: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
                $cateto1   = $_POST['primeiroNumero'];
                $cateto2   = $_POST['segundoNumero'];
                $resultado = $funcoes->calcularHipotenusa($cateto1, $cateto2);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "A hipotenusa é: " . $resultado;
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>