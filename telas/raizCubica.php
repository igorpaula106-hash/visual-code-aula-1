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
    <title>Raiz Cúbica</title>
</head>
<body>
    <h1>Calcular a Raiz Cúbica de um Número</h1>
    <form method="POST">
        <label>Informe um número: </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $numero = $_POST['primeiroNumero'];
                $resultado = $funcoes->raizCubica($numero);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "A raiz cúbica é: " . $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>