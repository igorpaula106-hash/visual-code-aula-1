<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $encerrado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['acumulador_numeros']);
    }

    if(!isset($_SESSION['acumulador_numeros'])){
        $_SESSION['acumulador_numeros'] = [];
    }

    if(isset($_POST['numero']) && $_POST['numero'] !== ""){
        $_SESSION['acumulador_numeros'][] = (int)$_POST['numero'];
    }

    if(!empty($_SESSION['acumulador_numeros'])){
        $resultado = $funcoes->acumularAteDuzentos($_SESSION['acumulador_numeros']);

        if(strpos($resultado, "Limite ultrapassado!") !== false){
            $encerrado = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Acumulador de Valores (WHILE)</title>
</head>
<body>
    <h1>Acumulador de Valores (Até Ultrapassar 200)</h1>

    <?php if(!$encerrado): ?>
        <form method="POST">
            <label>Informe um número inteiro: </label>
            <input type="number" id="numero" name="numero" required autofocus/>
            <br><br>

            <button type="submit">Adicionar Número</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Informe números inteiros até que a soma ultrapasse 200.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Contagem</button>
    </form>
</body>
</html>