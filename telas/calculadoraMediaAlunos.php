<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
    $encerrado = false;

    if(isset($_POST['reiniciar'])){
        unset($_SESSION['historico_medias_alunos'], $_SESSION['medias_alunos_encerrado']);
    }

    if(!isset($_SESSION['historico_medias_alunos'])){
        $_SESSION['historico_medias_alunos'] = [];
    }

    if(isset($_POST['nomeAluno'], $_POST['nota1'], $_POST['nota2'], $_POST['nota3']) && $_POST['nomeAluno'] !== ""){
        $_SESSION['historico_medias_alunos'][] = [
            'nome'  => trim($_POST['nomeAluno']),
            'nota1' => (float)$_POST['nota1'],
            'nota2' => (float)$_POST['nota2'],
            'nota3' => (float)$_POST['nota3']
        ];

        $continuar = $_POST['continuar'] ?? 'S';
        if($continuar === 'N'){
            $_SESSION['medias_alunos_encerrado'] = true;
        }
    }

    if(isset($_SESSION['medias_alunos_encerrado']) && $_SESSION['medias_alunos_encerrado'] === true){
        $encerrado = true;
    }

    if(!empty($_SESSION['historico_medias_alunos'])){
        $resultado = $funcoes->calculadoraMediaAlunosDoWhile($_SESSION['historico_medias_alunos'], $encerrado);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média de Alunos (DO WHILE)</title>
</head>
<body>
    <h1>Calculadora de Média de Alunos</h1>

    <?php if(!$encerrado): ?>
        <form method="POST">
            <label>Nome do aluno: </label>
            <input type="text" name="nomeAluno" required autofocus/>
            <br><br>

            <label>Nota 1: </label>
            <input type="number" step="any" min="0" max="10" name="nota1" required/>
            <br><br>

            <label>Nota 2: </label>
            <input type="number" step="any" min="0" max="10" name="nota2" required/>
            <br><br>

            <label>Nota 3: </label>
            <input type="number" step="any" min="0" max="10" name="nota3" required/>
            <br><br>

            <label>Deseja calcular a média de outro aluno após este? </label>
            <select name="continuar">
                <option value="S">Sim, calcular próximo aluno</option>
                <option value="N">Não, encerrar cálculos</option>
            </select>
            <br><br>

            <button type="submit">Calcular Média</button>
        </form>
        <br>
    <?php endif; ?>

    <?php
        if($resultado !== ""){
            echo $resultado . "<br><br>";
        }else{
            echo "Preencha os dados acima para calcular a média do primeiro aluno.<br><br>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="reiniciar" value="1">Reiniciar Calculadora</button>
    </form>
</body>
</html>