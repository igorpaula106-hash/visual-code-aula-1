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
    <title>Análise de Temperaturas (FOR)</title>
</head>
<body>
    <h1>Análise de Temperaturas (7 Dias)</h1>
    <form method="POST">
        <?php
            for($i = 1; $i <= 7; $i++){
                echo "<label>Temperatura do Dia $i (°C): </label>";
                echo "<input type='number' step='any' name='temperaturas[]' required/><br><br>";
            }
        ?>

        <button type="submit">Analisar
        <?php
            if(isset($_POST['temperaturas'])){
                $temperaturas = $_POST['temperaturas'];
                $resultado    = $funcoes->analisarTemperaturas($temperaturas);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if(isset($_POST['temperaturas'])){
            echo $resultado;
        }else{
            echo "Preencha todas as 7 temperaturas!";
        }
    ?>
</body>
</html>