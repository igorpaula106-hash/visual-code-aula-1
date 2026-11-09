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
    <title>Idade em Dias</title>
</head>
<body>
    <h1>Converter Idade para Dias</h1>
    <form method="POST">
        <label>Informe a sua idade em anos: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $anos = $_POST['primeiroNumero'];
                $resultado = $funcoes->anosParaDias($anos);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "A sua idade em dias é aproximadamente: " . $resultado . " dias";
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>