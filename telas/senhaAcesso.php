<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $acessoLiberado = false;

    if(isset($_POST['senha']) && $_POST['senha'] !== ""){
        $senhaDigitada = $_POST['senha'];
        $resultado     = $funcoes->validarSenha($senhaDigitada);

        if($resultado === "Acesso permitido! Senha correta."){
            $acessoLiberado = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha de Acesso (WHILE)</title>
</head>
<body>
    <h1>Validação de Senha de Acesso</h1>

    <?php if(!$acessoLiberado): ?>
        <form method="POST">
            <label>Informe a senha de acesso: </label>
            <input type="password" id="senha" name="senha" required/>
            <br><br>

            <button type="submit">Entrar</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado;
        }else{
            echo "Digite a senha para acessar (dica: 1234).";
        }
    ?>
</body>
</html>