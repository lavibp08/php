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
    <title>Temperatura</title>
</head>
<body>
    <h2>Informe a temperatura</h2>
    <form method="POST">
        <label>Informe a temperatura: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Multiplicar
        <?php
            if(isset($_POST['primeiroNumero'])){
                $c = $_POST['primeiroNumero'];

                $resultado = $funcoes->temperatura($c);//Utilizando o método da classe Funcoes
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