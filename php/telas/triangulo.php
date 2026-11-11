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
    <title>Triangulo</title>
</head>
<body>
    <h2>Informe a area do triangulo</h2>
    <form method="POST">
        <label>Informe a base: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe a altura: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>        

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $b = $_POST['primeiroNumero'];
                $h = $_POST['segundoNumero'];

                $resultado = $funcoes->triangulo($b,$h);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O resultado é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>