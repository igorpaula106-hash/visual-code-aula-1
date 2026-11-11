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
    <title>Média Ponderada</title>
</head>
<body>
    <h1>Calcular Média Ponderada</h1>
    <form method="POST">
        <label>Nota 1: </label>
        <input type="number" step="any" name="nota1"/>
        <label>Peso 1: </label>
        <input type="number" step="any" name="peso1"/>
        <br><br>

        <label>Nota 2: </label>
        <input type="number" step="any" name="nota2"/>
        <label>Peso 2: </label>
        <input type="number" step="any" name="peso2"/>
        <br><br>

        <label>Nota 3: </label>
        <input type="number" step="any" name="nota3"/>
        <label>Peso 3: </label>
        <input type="number" step="any" name="peso3"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['nota1']) && isset($_POST['peso1']) && isset($_POST['nota2']) && isset($_POST['peso2']) && isset($_POST['nota3']) && isset($_POST['peso3'])){
                $n1 = $_POST['nota1'];
                $p1 = $_POST['peso1'];
                $n2 = $_POST['nota2'];
                $p2 = $_POST['peso2'];
                $n3 = $_POST['nota3'];
                $p3 = $_POST['peso3'];
                
                $resultado = $funcoes->mediaPonderada($n1, $p1, $n2, $p2, $n3, $p3);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['nota1']) && $_POST['nota1'] !== ""){
            if(is_numeric($resultado)){
                echo "A média ponderada é: " . $resultado;
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha todos os campos!";
        }
    ?>
</body>
</html>