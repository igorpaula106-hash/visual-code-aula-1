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
    <title>Converter para Porcentagem</title>
</head>
<body>
    <h1>Converter Valor para Porcentagem</h1>
    <form method="POST">
        <label>Informe um valor (ex: 0.25): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Converter
        <?php
            if(isset($_POST['primeiroNumero'])){
                $valor = $_POST['primeiroNumero'];
                $resultado = $funcoes->converterPorcentagem($valor);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "O valor em porcentagem é: " . $resultado . "%";
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>