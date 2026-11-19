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
    <title>Tabuada Personalizada (FOR)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Tabuada de Multiplicação (1 ao 10)</h1>
    <form method="POST">
        <label>Informe um número inteiro: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Gerar Tabuada
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero    = $_POST['primeiroNumero'];
                $resultado = $funcoes->tabuadaPersonalizada($numero);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "<strong>Tabuada do " . $_POST['primeiroNumero'] . ":</strong><br><br>";
            echo $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>