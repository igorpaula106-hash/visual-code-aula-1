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
    <title>Dias para Segundos</title>
</head>
<body>
    <h1>Converter Dias para Segundos</h1>
    <form method="POST">
        <label>Informe a quantidade de dias: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $dias = $_POST['primeiroNumero'];
                $resultado = $funcoes->diasParaSegundos($dias);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "A quantidade de segundos é: " . number_format($resultado, 0, ',', '.') . " segundos";
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>