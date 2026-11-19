<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $encerrado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['lista_positivos']);
    }

    if(!isset($_SESSION['lista_positivos'])){
        $_SESSION['lista_positivos'] = [];
    }

    if(isset($_POST['numero']) && $_POST['numero'] !== ""){
        $_SESSION['lista_positivos'][] = (int)$_POST['numero'];
    }

    if(!empty($_SESSION['lista_positivos'])){
        $resultado = $funcoes->contarPositivosAteNegativo($_SESSION['lista_positivos']);

        if(strpos($resultado, "Leitura encerrada!") !== false){
            $encerrado = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Positivos (WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Contagem de Números Positivos</h1>

    <?php if(!$encerrado): ?>
        <form method="POST">
            <label>Informe um número inteiro (negativo para encerrar): </label>
            <input type="number" id="numero" name="numero" required autofocus/>
            <br><br>

            <button type="submit">Enviar Número</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Digite números inteiros positivos. Informe um número negativo para finalizar.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Contagem</button>
    </form>
</body>
</html>