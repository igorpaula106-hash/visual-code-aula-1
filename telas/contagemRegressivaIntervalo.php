<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Regressiva por Intervalo (WHILE)</title>
</head>
<body>
    <h1>Contagem Regressiva por Intervalo</h1>
    <form method="POST">
        <label>Informe o valor inicial: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero" required autofocus/>
        <br><br>

        <label>Informe o valor final: </label>
        <input type="number" id="segundoNumero" name="segundoNumero" required/>
        <br><br>

        <button type="submit">Contar
        <?php
            if(isset($_POST['primeiroNumero'], $_POST['segundoNumero']) && $_POST['primeiroNumero'] !== "" && $_POST['segundoNumero'] !== ""){
                $inicio    = (int)$_POST['primeiroNumero'];
                $fim       = (int)$_POST['segundoNumero'];
                $resultado = $funcoes->contagemRegressivaIntervalo($inicio, $fim);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if($resultado !== ""){
            echo "Resultado: " . $resultado;
        }else{
            echo "Preencha os dois campos!";
        }
    ?>
</body>
</html>