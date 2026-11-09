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
    <title>Área do Trapézio</title>
</head>
<body>
    <h1>Calcular a Área de um Trapézio</h1>
    <form method="POST">
        <label>Informe a Base Maior: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a Base Menor: </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe a Altura: </label>
        <input type="number" step="any" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero']) && isset($_POST['terceiroNumero'])){
                $baseMaior = $_POST['primeiroNumero'];
                $baseMenor = $_POST['segundoNumero'];
                $altura    = $_POST['terceiroNumero'];
                $resultado = $funcoes->areaTrapezio($baseMaior, $baseMenor, $altura);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "A área do trapézio é: " . $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>