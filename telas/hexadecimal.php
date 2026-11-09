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
    <title>Converter para Hexadecimal</title>
</head>
<body>
    <h1>Converter Número para Hexadecimal</h1>
    <form method="POST">
        <label>Informe um número inteiro: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Converter
        <?php
            if(isset($_POST['primeiroNumero'])){
                $numero = $_POST['primeiroNumero'];
                $resultado = $funcoes->converterHexadecimal($numero);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "O número em hexadecimal é: " . $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>