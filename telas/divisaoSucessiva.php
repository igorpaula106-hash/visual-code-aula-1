<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão Sucessiva por 2 (WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Divisão Sucessiva por 2 (Parte Inteira)</h1>
    <form method="POST">
        <label>Informe um número inteiro positivo: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero" required autofocus/>
        <br><br>

        <button type="submit">Dividir
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero    = (int)$_POST['primeiroNumero'];
                $resultado = $funcoes->divisaoSucessivaPorDois($numero);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            echo $resultado;
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>