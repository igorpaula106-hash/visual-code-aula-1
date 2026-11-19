<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes   = new Funcoes();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Dígitos (WHILE)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Soma dos Dígitos de um Número</h1>
    <form method="POST">
        <label>Informe um número inteiro positivo: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero" required autofocus/>
        <br><br>

        <button type="submit">Calcular Soma
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $numero    = (int)$_POST['primeiroNumero'];
                $resultado = $funcoes->somaDigitos($numero);
            }
        ?>
        </button>
    </form>
    <br>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "A soma dos dígitos de " . $_POST['primeiroNumero'] . " é: " . $resultado;
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>