<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes    = new Funcoes();
    $resultado  = "";
    $finalizado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['historico_conversoes'], $_SESSION['conversoes_finalizadas']);
    }

    if(!isset($_SESSION['historico_conversoes'])){
        $_SESSION['historico_conversoes'] = [];
    }

    if(isset($_POST['valorReais'], $_POST['cotacaoDolar']) && $_POST['valorReais'] !== "" && $_POST['cotacaoDolar'] !== ""){
        $reais   = (float)$_POST['valorReais'];
        $cotacao = (float)$_POST['cotacaoDolar'];

        if($reais >= 0 && $cotacao > 0){
            $_SESSION['historico_conversoes'][] = [
                'reais'   => $reais,
                'cotacao' => $cotacao
            ];

            $continuar = $_POST['continuar'] ?? 'S';
            if($continuar === 'N'){
                $_SESSION['conversoes_finalizadas'] = true;
            }
        }
    }

    if(isset($_SESSION['conversoes_finalizadas']) && $_SESSION['conversoes_finalizadas'] === true){
        $finalizado = true;
    }

    if(!empty($_SESSION['historico_conversoes'])){
        $resultado = $funcoes->conversorMoedasDoWhile($_SESSION['historico_conversoes'], $finalizado);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas (DO WHILE)</title>
</head>
<body>
    <h1>Conversor de Moedas (Real para Dólar)</h1>

    <?php if(!$finalizado): ?>
        <form method="POST">
            <label>Valor em Reais (R$): </label>
            <input type="number" step="0.01" min="0" name="valorReais" required autofocus/>
            <br><br>

            <label>Cotação do Dólar (R$): </label>
            <input type="number" step="0.01" min="0.01" name="cotacaoDolar" required/>
            <br><br>

            <label>Deseja realizar uma nova conversão após esta? </label>
            <select name="continuar">
                <option value="S">Sim, realizar nova operação</option>
                <option value="N">Não, encerrar conversões</option>
            </select>
            <br><br>

            <button type="submit">Converter para Dólar</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Informe o valor em reais e a cotação do dólar para converter.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Conversor</button>
    </form>
</body>
</html>