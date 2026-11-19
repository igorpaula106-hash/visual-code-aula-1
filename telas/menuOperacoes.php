<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $encerrado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['menu_operacoes_encerrado']);
    }

    if(isset($_POST['opcao']) && $_POST['opcao'] !== ""){
        $opcao = (int)$_POST['opcao'];
        $num1  = isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== "" ? (float)$_POST['primeiroNumero'] : 0;
        $num2  = isset($_POST['segundoNumero']) && $_POST['segundoNumero'] !== "" ? (float)$_POST['segundoNumero'] : 0;

        $resultado = $funcoes->menuOperacoesDoWhile($opcao, $num1, $num2);

        if($opcao === 0){
            $_SESSION['menu_operacoes_encerrado'] = true;
        }
    }

    if(isset($_SESSION['menu_operacoes_encerrado']) && $_SESSION['menu_operacoes_encerrado'] === true){
        $encerrado = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Operações (DO WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Menu de Operações Matemáticas</h1>

    <?php if(!$encerrado): ?>
        <p>
            <strong>Opções disponíveis:</strong><br>
            1 – Somar<br>
            2 – Subtrair<br>
            3 – Multiplicar<br>
            4 – Dividir<br>
            0 – Sair
        </p>

        <form method="POST">
            <label>Escolha a opção (0 a 4): </label>
            <input type="number" name="opcao" min="0" max="4" required autofocus/>
            <br><br>

            <label>Primeiro número (opcional se escolher 0): </label>
            <input type="number" step="any" name="primeiroNumero"/>
            <br><br>

            <label>Segundo número (opcional se escolher 0): </label>
            <input type="number" step="any" name="segundoNumero"/>
            <br><br>

            <button type="submit">Executar</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo "<strong>" . $resultado . "</strong><br><br>";
        }else if(!$encerrado){
            echo "Selecione uma opção e informe os valores para calcular.<br><br>";
        }
    ?>

    <?php if($encerrado): ?>
        <form method="POST">
            <button type="submit" name="reiniciar" value="1">Reabrir Menu</button>
        </form>
    <?php endif; ?>
</body>
</html>