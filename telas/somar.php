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
    <title>Somar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Informe os valores que deseja somar: </h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o segundo número: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Somar
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];

                $resultado = $funcoes->somarDoisNumeros($num1,$num2);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O resultado da soma é: ".$resultado;
        }else{
            echo "Preencha os Campos!";
        }
        
    ?>
</body>
</html>