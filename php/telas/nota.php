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
    <h2>Informe as notas: <h2>
    <form method ="POST">
        <label>Nota: </label>
        <input type="number" id="numeroUm" name="numeroUm"/>
        <br><br>

        <label>Nota: </label>
        <input type="number" id="numeroDois" name="numeroDois"/>
        <br><br>

        <label>Nota: </label>
        <input type="number" id="numeroTres" name="numeroTres"/>
        <br><br>

        <label>Nota: </label>
        <input type="number" id="numeroQuatro" name="numeroQuatro"/>
        <br><br>

        <label>Nota: </label>
        <input type="number" id="numeroCinco" name="numeroCinco"/>
        <br><br>

        <label>Nota: </label>
        <input type="number" id="numeroSeis" name="numeroSeis"/>
        <br><br>

        <label>Nota: </label>
        <input type="number" id="numeroSete" name="numeroSete"/>
        <br><br>

        <label>Nota: </label>
        <input type="number" id="numeroOito" name="numeroOito"/>
        <br><br>
        
        <button type="submit">
        <?php
            if(isset($_POST['numeroUm'])){
                $num1 = $_POST['numeroUm'];
                $num2 = $_POST['numeroDois'];
                $num3 = $_POST['numeroTres'];
                $num4 = $_POST['numeroQuatro'];
                $num5 = $_POST['numeroCinco'];
                $num6 = $_POST['numeroSeis'];
                $num7 = $_POST['numeroSete'];
                $num8 = $_POST['numeroOito'];
                
                $resultado = $funcoes->nota($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['numeroUm'])){
            echo "A média é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>