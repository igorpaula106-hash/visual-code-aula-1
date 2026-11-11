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
    <title>Fahrenheit para Celsius</title>
</head>
<body>
    <h1>Converter Fahrenheit para Celsius</h1>
    <form method="POST">
        <label>Informe a temperatura em Fahrenheit (°F): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Converter
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $fahrenheit = $_POST['primeiroNumero'];
                $resultado  = $funcoes->fahrenheitParaCelsius($fahrenheit);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "A temperatura em Celsius é: " . $resultado . " °C";
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>