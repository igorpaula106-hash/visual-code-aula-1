<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes    = new Funcoes();
    $resultado  = "";
    $finalizado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['pesquisa_avaliacoes'], $_SESSION['pesquisa_finalizada']);
    }

    if(!isset($_SESSION['pesquisa_avaliacoes'])){
        $_SESSION['pesquisa_avaliacoes'] = [];
    }

    if(isset($_POST['nota']) && $_POST['nota'] !== ""){
        $nota = (int)$_POST['nota'];

        if($nota >= 1 && $nota <= 5){
            $_SESSION['pesquisa_avaliacoes'][] = $nota;

            $continuar = $_POST['continuar'] ?? 'S';
            if($continuar === 'N'){
                $_SESSION['pesquisa_finalizada'] = true;
            }
        }
    }

    if(isset($_SESSION['pesquisa_finalizada']) && $_SESSION['pesquisa_finalizada'] === true){
        $finalizado = true;
    }

    if(!empty($_SESSION['pesquisa_avaliacoes'])){
        $resultado = $funcoes->pesquisaSatisfacaoDoWhile($_SESSION['pesquisa_avaliacoes'], $finalizado);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Satisfação (DO WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Pesquisa de Satisfação do Atendimento</h1>

    <?php if(!$finalizado): ?>
        <form method="POST">
            <label>Como você avalia o atendimento? (1 = Péssimo a 5 = Excelente): </label>
            <input type="number" name="nota" min="1" max="5" required autofocus/>
            <br><br>

            <label>Deseja registrar outra avaliação após esta? </label>
            <select name="continuar">
                <option value="S">Sim, registrar outra avaliação</option>
                <option value="N">Não, finalizar pesquisa</option>
            </select>
            <br><br>

            <button type="submit">Enviar Avaliação</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Selecione uma nota de 1 a 5 para registrar a primeira avaliação.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Pesquisa</button>
    </form>
</body>
</html>