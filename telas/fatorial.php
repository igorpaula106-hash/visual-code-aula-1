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
    <title>Calcular Fatorial (FOR)</title>
</head>
<body>
    <h1>Calcular Fatorial</h1>
    <form method="POST">
        <label>Informe um número inteiro não negativo: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero    = (int)$_POST['primeiroNumero'];
                $resultado = $funcoes->calcularFatorial($numero);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "O fatorial de " . $_POST['primeiroNumero'] . "! é: " . $resultado;
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>