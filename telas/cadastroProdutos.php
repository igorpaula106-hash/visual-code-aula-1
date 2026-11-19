<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes    = new Funcoes();
    $resultado  = "";
    $finalizado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['lista_produtos']);
    }

    if(!isset($_SESSION['lista_produtos'])){
        $_SESSION['lista_produtos'] = [];
    }

    if(isset($_POST['nomeProduto'], $_POST['precoProduto']) && $_POST['nomeProduto'] !== "" && $_POST['precoProduto'] !== ""){
        $_SESSION['lista_produtos'][] = [
            'nome'  => trim($_POST['nomeProduto']),
            'preco' => (float)$_POST['precoProduto']
        ];

        $continuar = $_POST['continuar'] ?? 'S';
        if($continuar === 'N'){
            $finalizado = true;
        }
    }

    if(!empty($_SESSION['lista_produtos'])){
        $resultado = $funcoes->cadastrarProdutosDoWhile($_SESSION['lista_produtos'], $finalizado);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos (DO WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <?php if(!$finalizado): ?>
        <form method="POST">
            <label>Nome do produto: </label>
            <input type="text" name="nomeProduto" required autofocus/>
            <br><br>

            <label>Preço do produto (R$): </label>
            <input type="number" step="0.01" min="0" name="precoProduto" required/>
            <br><br>

            <label>Deseja cadastrar outro produto após este? </label>
            <select name="continuar">
                <option value="S">Sim, continuar cadastrando</option>
                <option value="N">Não, finalizar cadastro</option>
            </select>
            <br><br>

            <button type="submit">Cadastrar Produto</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Preencha os dados acima para iniciar o cadastro de produtos.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Cadastro</button>
    </form>
</body>
</html>