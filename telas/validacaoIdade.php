<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes     = new Funcoes();
    $resultado   = "";
    $idadeValida = false;

    if(isset($_POST['idade']) && $_POST['idade'] !== ""){
        $idade     = (int)$_POST['idade'];
        $resultado = $funcoes->validarIdade($idade);

        if(strpos($resultado, "Idade válida") !== false){
            $idadeValida = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Idade (WHILE)</title>
</head>
<body>
    <h1>Validação de Idade</h1>

    <?php if(!$idadeValida): ?>
        <form method="POST">
            <label>Informe a idade (0 a 120): </label>
            <input type="number" id="idade" name="idade" required autofocus/>
            <br><br>

            <button type="submit">Validar</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado;
        }else{
            echo "Digite uma idade válida entre 0 e 120 anos.";
        }
    ?>
</body>
</html>