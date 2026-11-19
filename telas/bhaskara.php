<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhaskara</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Informe os valores de bhaskara (A, B, C) separados: </h1>
    <form method="POST">
        <label>Informe o A: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o B: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o C: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $a = $_POST['primeiroNumero'];
                $b = $_POST['segundoNumero'];
                $c = $_POST['terceiroNumero'];

                $resultado = $funcoes->calcularX1X2($a,$b,$c);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>