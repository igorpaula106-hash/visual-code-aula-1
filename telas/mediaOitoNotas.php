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
    <title>Média de 8 Notas (FOR)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Calcular Média de 8 Notas</h1>
    <form method="POST">
        <?php
            for($i = 1; $i <= 8; $i++){
                echo "<label>Nota $i: </label>";
                echo "<input type='number' step='any' name='notas[]' required/><br><br>";
            }
        ?>

        <button type="submit">Calcular Média
        <?php
            if(isset($_POST['notas'])){
                $notas     = $_POST['notas'];
                $resultado = $funcoes->mediaOitoNotas($notas);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if(isset($_POST['notas'])){
            echo $resultado;
        }else{
            echo "Preencha todas as 8 notas!";
        }
    ?>
</body>
</html>