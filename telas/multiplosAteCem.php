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
    <title>Múltiplos entre 1 e 100 (FOR)</title>
</head>
<body>
    <h1>Exibir Múltiplos entre 1 e 100</h1>
    <form method="POST">
        <label>Informe um número inteiro (ex: 7): </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Exibir Múltiplos
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero    = $_POST['primeiroNumero'];
                $resultado = $funcoes->multiplosAteCem($numero);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "Múltiplos entre 1 e 100: " . $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>