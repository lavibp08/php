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
    <title>Média</title>
</head>
<body>
    <h2>Informe os números</h2>
    <form method= "POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="num1" name="num1"/>
        <br><br>

        <label>Informe o segundo número: </label>
        <input type="number" id="num2" name="num2"/>
        <br><br>

        <label>Informe o terceiro número: </label>
        <input type="number" id="num3" name="num3"/>
        <br><br>

        <button type="submit">Dividir
        <?php
            if(isset($_POST['num1'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                
                $resultado = $funcoes->media($num1, $num2, $num3);
            }
         
        ?> 
        </button>     
    </form>

    <?php
        if(isset($_POST['num1'])){
            echo "O resultado da média é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>        
</body>
</html>
