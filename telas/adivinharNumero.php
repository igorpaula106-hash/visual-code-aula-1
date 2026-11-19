<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $acertou   = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['palpites_jogo']);
    }

    if(!isset($_SESSION['palpites_jogo'])){
        $_SESSION['palpites_jogo'] = [];
    }

    if(isset($_POST['palpite']) && $_POST['palpite'] !== ""){
        $_SESSION['palpites_jogo'][] = (int)$_POST['palpite'];
    }

    if(!empty($_SESSION['palpites_jogo'])){
        $resultado = $funcoes->adivinharNumero($_SESSION['palpites_jogo']);

        if(strpos($resultado, "Parabéns!") !== false){
            $acertou = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhe o Número (WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Adivinhe o Número Secreto</h1>

    <?php if(!$acertou): ?>
        <form method="POST">
            <label>Digite seu palpite (número inteiro): </label>
            <input type="number" id="palpite" name="palpite" required autofocus/>
            <br><br>

            <button type="submit">Enviar Palpite</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Tente descobrir o número secreto!<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Jogo</button>
    </form>
</body>
</html>