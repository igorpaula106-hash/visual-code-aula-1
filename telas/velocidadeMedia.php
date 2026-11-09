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
    <title>Velocidade Média</title>
</head>
<body>
    <h1>Calcular Velocidade Média</h1>
    <form method="POST">
        <label>Informe a distância (em km): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o tempo (em horas): </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
                $distancia = $_POST['primeiroNumero'];
                $tempo     = $_POST['segundoNumero'];
                $resultado = $funcoes->velocidadeMedia($distancia, $tempo);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "A velocidade média é: " . $resultado . " km/h";
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>