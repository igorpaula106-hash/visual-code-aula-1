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
    <title>Área do Círculo</title>
</head>
<body>
    <h1>Calcular a Área de um Círculo</h1>
    <form method="POST">
        <label>Informe o Raio: </label>
        <input type="number" step="any" id="raio" name="raio"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['raio'])){
                $raio = $_POST['raio'];
                $resultado = $funcoes->areaCirculo($raio);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['raio'])){
            echo "A área do círculo é: " . $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>