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
    <title>Divisibilidade por 3 (FOR)</title>
</head>
<body>
    <h1>Verificar Divisibilidade por 3 (30 Números)</h1>
    <form method="POST">
        <?php
            for($i = 1; $i <= 30; $i++){
                echo "<label>Número $i: </label>";
                echo "<input type='number' name='numeros[]' required/><br><br>";
            }
        ?>

        <button type="submit">Verificar
        <?php
            if(isset($_POST['numeros'])){
                $numeros   = $_POST['numeros'];
                $resultado = $funcoes->divisibilidadePorTres($numeros);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if(isset($_POST['numeros'])){
            echo $resultado;
        }else{
            echo "Preencha todos os 30 campos!";
        }
    ?>
</body>
</html>