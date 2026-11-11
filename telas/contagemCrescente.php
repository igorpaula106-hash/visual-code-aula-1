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
    <title>Contagem Crescente (FOR)</title>
</head>
<body>
    <h1>Contagem Crescente até N</h1>
    <form method="POST">
        <label>Informe um número inteiro positivo: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Contar
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero    = $_POST['primeiroNumero'];
                $resultado = $funcoes->contagemCrescente($numero);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo "Resultado: " . $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>