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
    <title>Calculo</title>
</head>
<body>
    <h2>Informe o número para à soma: <h2>
    <form method ="POST">
        <label>Número: </label>
        <input type="number" id="numeroUm" name="numeroUm"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
            if(isset($_POST['numeroUm'])){
                $num = $_POST['numeroUm'];
                
                $resultado = $funcoes->soma($num);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['numeroUm'])){
            echo "A soma é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>