<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $encerrado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['caixa_operacoes'], $_SESSION['caixa_encerrado']);
    }

    if(!isset($_SESSION['caixa_operacoes'])){
        $_SESSION['caixa_operacoes'] = [];
    }

    if(isset($_POST['opcao']) && $_POST['opcao'] !== ""){
        $opcao = (int)$_POST['opcao'];
        $valor = isset($_POST['valor']) && $_POST['valor'] !== "" ? (float)$_POST['valor'] : 0.0;

        $_SESSION['caixa_operacoes'][] = [
            'opcao' => $opcao,
            'valor' => $valor
        ];

        if($opcao === 0){
            $_SESSION['caixa_encerrado'] = true;
        }
    }

    if(isset($_SESSION['caixa_encerrado']) && $_SESSION['caixa_encerrado'] === true){
        $encerrado = true;
    }

    $resultado = $funcoes->caixaEletronicoDoWhile($_SESSION['caixa_operacoes']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico (DO WHILE)</title>
</head>
<body>
    <h1>Simulador de Caixa Eletrônico</h1>

    <?php if(!$encerrado): ?>
        <p>
            <strong>Menu de Operações:</strong><br>
            1 – Consultar saldo<br>
            2 – Realizar saque<br>
            3 – Realizar depósito<br>
            0 – Sair
        </p>

        <form method="POST">
            <label>Escolha a opção (0 a 3): </label>
            <input type="number" name="opcao" min="0" max="3" required autofocus/>
            <br><br>

            <label>Valor da operação (R$ — obrigatório para saque ou depósito): </label>
            <input type="number" step="0.01" min="0" name="valor"/>
            <br><br>

            <button type="submit">Confirmar Operação</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        echo "<strong>" . $resultado . "</strong><br><br>";
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Caixa (R$ 1.500,00)</button>
    </form>
</body>
</html>