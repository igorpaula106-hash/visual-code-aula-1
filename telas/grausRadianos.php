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
    <title>Graus para Radianos</title>
</head>
<body>
    <h1>Converter Graus para Radianos</h1>
    <form method="POST">
        <label>Informe o ângulo em graus: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Converter
        <?php
            if(isset($_POST['primeiroNumero'])){
                $graus = $_POST['primeiroNumero'];
                $resultado = $funcoes->grausParaRadianos($graus);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "O valor em radianos é: " . $resultado . " rad";
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>