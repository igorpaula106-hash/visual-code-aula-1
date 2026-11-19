<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes    = new Funcoes();
    $resultado  = "";
    $encontrado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['tentativas_cinquenta']);
    }

    if(!isset($_SESSION['tentativas_cinquenta'])){
        $_SESSION['tentativas_cinquenta'] = [];
    }

    if(isset($_POST['numero']) && $_POST['numero'] !== ""){
        $_SESSION['tentativas_cinquenta'][] = (int)$_POST['numero'];
    }

    if(!empty($_SESSION['tentativas_cinquenta'])){
        $resultado = $funcoes->localizarNumeroCinquenta($_SESSION['tentativas_cinquenta']);

        if(strpos($resultado, "Número 50 encontrado!") !== false){
            $encontrado = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização de um Número (WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Localização do Número 50</h1>

    <?php if(!$encontrado): ?>
        <form method="POST">
            <label>Informe um número inteiro: </label>
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
            echo "Digite números inteiros até encontrar o número 50.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Tentativas</button>
    </form>
</body>
</html>