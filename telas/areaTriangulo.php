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
    <title>Área do Triângulo</title>
</head>
<body>
    <h1>Calcular a Área de um Triângulo</h1>
    <form method="POST">
        <label>Informe a base: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a altura: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
                $base = $_POST['primeiroNumero'];
                $altura = $_POST['segundoNumero'];
                $resultado = $funcoes->areaTriangulo($base, $altura);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "A área do triângulo é: " . $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>