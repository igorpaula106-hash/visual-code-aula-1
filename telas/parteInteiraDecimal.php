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
    <title>Parte Inteira e Decimal</title>
</head>
<body>
    <h1>Separar Parte Inteira e Decimal</h1>
    <form method="POST">
        <label>Informe um número decimal (ex: 12.75): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Separar
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero = $_POST['primeiroNumero'];
                $resultado = $funcoes->separarParteInteiraDecimal($numero);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>