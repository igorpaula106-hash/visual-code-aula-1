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
    <title>Soma de 1 até N (FOR)</title>
</head>
<body>
    <h1>Soma dos Números de 1 até N</h1>
    <form method="POST">
        <label>Informe um número inteiro positivo (N): </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero    = $_POST['primeiroNumero'];
                $resultado = $funcoes->somaAteN($numero);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "A soma de 1 até " . $_POST['primeiroNumero'] . " é: " . $resultado;
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>