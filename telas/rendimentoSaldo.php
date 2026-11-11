<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes = new Funcoes();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendimento de Saldo</title>
</head>
<body>
    <h1>Calcular Rendimento do Saldo (Taxa Fixa de 5%)</h1>
    <form method="POST">
        <label>Informe o saldo atual da conta (R$): </label>
        <input type="number" step="any" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
                $saldo = $_POST['primeiroNumero'];
                $resultado = $funcoes->rendimentoSaldo($saldo);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "O saldo atualizado com rendimento é: R$ " . number_format($resultado, 2, ',', '.');
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>