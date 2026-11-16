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
    <title>Regressiva</title>
</head>
<body>
    <h2>Informe os números: <h2>
    <form method ="POST">
        <label>Ordem: </label>
        <input type="number" id="numeroUm" name="numeroUm"/>
        <br><br>
        
        <button type="submit">
        <?php
            if(isset($_POST['numeroUm'])){
                $num = $_POST['numeroUm'];
                
                $resultado = $funcoes->regressivo($num);
                return $resultado;
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['numeroUm'])){
            echo "A ordem é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>