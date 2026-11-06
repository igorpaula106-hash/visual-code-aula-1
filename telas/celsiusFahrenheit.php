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
    <title>Celsius para Fahrenheit</title>
</head>
<body>
    <h1>Converter Celsius (°C) para Fahrenheit (°F)</h1>
    <form method="POST">
        <label>Informe a temperatura em Celsius: </label>
        <input type="number" step="any" id="celsius" name="celsius"/>
        <br><br>

        <button type="submit">Converter
        <?php
            if(isset($_POST['celsius'])){
                $celsius = $_POST['celsius'];
                $resultado = $funcoes->celsiusParaFahrenheit($celsius);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['celsius']) && $_POST['celsius'] !== ""){
            echo "A temperatura em Fahrenheit é: " . $resultado . " °F";
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>