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
    <title>Tempo até 100 Anos</title>
</head>
<body>
    <h1>Calcular Anos Restantes até os 100 Anos</h1>
    <form method="POST">
        <label>Informe a sua idade atual: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $idade = $_POST['primeiroNumero'];
                $resultado = $funcoes->tempoAteCemAnos($idade);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero']) && $_POST['primeiroNumero'] !== ""){
            if(is_numeric($resultado)){
                echo "Faltam " . $resultado . " anos para você completar 100 anos!";
            }else{
                echo $resultado;
            }
        }else{
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>