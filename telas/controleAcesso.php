<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $encerrado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['tentativas_login'], $_SESSION['login_encerrado']);
    }

    if(!isset($_SESSION['tentativas_login'])){
        $_SESSION['tentativas_login'] = [];
    }

    if(isset($_POST['usuario'], $_POST['senha']) && $_POST['usuario'] !== "" && $_POST['senha'] !== ""){
        $_SESSION['tentativas_login'][] = [
            'usuario' => trim($_POST['usuario']),
            'senha'   => $_POST['senha']
        ];

        $tentarNovamente = $_POST['tentarNovamente'] ?? 'S';
        if($tentarNovamente === 'N'){
            $_SESSION['login_encerrado'] = true;
        }
    }

    if(isset($_SESSION['login_encerrado']) && $_SESSION['login_encerrado'] === true){
        $encerrado = true;
    }

    if(!empty($_SESSION['tentativas_login'])){
        $resultado = $funcoes->controleAcessoDoWhile($_SESSION['tentativas_login'], $encerrado);

        if(strpos($resultado, "Acesso autorizado!") !== false){
            $encerrado = true;
            $_SESSION['login_encerrado'] = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Acesso (DO WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Controle de Acesso ao Sistema</h1>

    <?php if(!$encerrado): ?>
        <form method="POST">
            <label>Nome de usuário: </label>
            <input type="text" name="usuario" required autofocus/>
            <br><br>

            <label>Senha: </label>
            <input type="password" name="senha" required/>
            <br><br>

            <label>Caso os dados estejam incorretos, deseja tentar novamente? </label>
            <select name="tentarNovamente">
                <option value="S">Sim, tentar novamente</option>
                <option value="N">Não, encerrar tentativas</option>
            </select>
            <br><br>

            <button type="submit">Entrar</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Informe usuário e senha para acessar (dica: admin / 1234).<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Controle de Acesso</button>
    </form>
</body>
</html>