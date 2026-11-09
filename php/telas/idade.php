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
    <title>Verificar idade</title>
</head>
<body>
    <h2>Informe a idade</h2>
    <form method="POST">
        <label>Coloque a sua idade: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Multiplicar
        <?php
            if(isset($_POST['primeiroNumero'])){
                $i = $_POST['primeiroNumero'];

                $resultado = $funcoes->idade($i);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "A idade em meses é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>