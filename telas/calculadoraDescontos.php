<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes    = new Funcoes();
    $resultado  = "";
    $finalizado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['historico_compras'], $_SESSION['compras_finalizadas']);
    }

    if(!isset($_SESSION['historico_compras'])){
        $_SESSION['historico_compras'] = [];
    }

    if(isset($_POST['valorCompra']) && $_POST['valorCompra'] !== ""){
        $valor = (float)$_POST['valorCompra'];

        if($valor > 0){
            $_SESSION['historico_compras'][] = $valor;

            $continuar = $_POST['continuar'] ?? 'S';
            if($continuar === 'N'){
                $_SESSION['compras_finalizadas'] = true;
            }
        }
    }

    if(isset($_SESSION['compras_finalizadas']) && $_SESSION['compras_finalizadas'] === true){
        $finalizado = true;
    }

    if(!empty($_SESSION['historico_compras'])){
        $resultado = $funcoes->calculadoraDescontosDoWhile($_SESSION['historico_compras'], $finalizado);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Descontos (DO WHILE)</title>
</head>
<body>
    <h1>Calculadora de Descontos (10% acima de R$ 200,00)</h1>

    <?php if(!$finalizado): ?>
        <form method="POST">
            <label>Valor da compra (R$): </label>
            <input type="number" step="0.01" min="0.01" name="valorCompra" required autofocus/>
            <br><br>

            <label>Deseja calcular outra compra após esta? </label>
            <select name="continuar">
                <option value="S">Sim, calcular outra compra</option>
                <option value="N">Não, encerrar cálculos</option>
            </select>
            <br><br>

            <button type="submit">Calcular Desconto</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Informe o valor da compra para verificar a aplicação do desconto.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Calculadora</button>
    </form>
</body>
</html>