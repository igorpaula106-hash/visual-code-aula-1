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
    <title>Calcular Densidade</title>
</head>
<body>
    <h1>Calcular Densidade de um Objeto</h1>
    <form method="POST">
        <label>Informe a massa (ex: em kg ou g): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o volume (ex: em m³ ou cm³): </label>
        <input type="number" step="any" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])){
                $massa     = $_POST['primeiroNumero'];
                $volume    = $_POST['segundoNumero'];
                $resultado = $funcoes->calcularDensidade($massa, $volume);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "A densidade do objeto é: " . $resultado;
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>