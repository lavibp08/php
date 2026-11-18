<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;
        
        //Criando um construtor = Instância as variáveis -> Cria as variáveis na memória do servidor
        public function __construct(){
            $this->num1      = 0;
            $this->num2      = 0;
            $this->resultado = 0;
        }//fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function somarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2; 
            return $this->resultado;
        }//fim do método somar

        public function subtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//fim do método subtrair

        public function multiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do método multiplicar

        public function dividirDoisNumeros(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//fim do método dividir

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//fim do delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Impossível calcular X1 e X2, delta negativo!";
            }else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br><br> X2 = $x2";
            }
        }//fim do método
        public function exibirDobro(float $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;
        
        }//fim do método

        public function media(float $num1, float $num2, float $num3){
            $soma = $num1 + $num2 + $num3;
            $this->resultado = $soma / 3;
            return $this->resultado;

        }

        public function raiz(float $a){
        if($a < 0) {
            return "Não existe raiz quadrada real para números negativos.";
        }

        $this->resultado = sqrt($a);
        return $this->resultado;
        }

        public function conversao($num1){
            $this->resultado = $num1 * 100;
            return $this->resultado;
        }

        public function raio(float $a, $r){
            $a = 3.14 * pow($r,2);
            $this->resultado = $a;
            return $this->resultado;
        }

        public function temperatura(float $c){
            $soma = $c * 1.8;
            $this->resultado = $soma + 32;
            return $this->resultado;
        }

        public function desconto(float $p){
            $sub = $p / 10;
            $this->resultado = $p - 10;
            return $this->resultado;
        }

        public function idade(float $i){
            $this->resultado = $i * 12;
            return $this->resultado;
        }

        public function numeros(float $num){
            if($num % 2 == 0){
                return "Par!";
            }else{
                return "Impar";
            }
        }

        public function crescente($num){
             // Verifica se o número é realmente positivo
                if ($num >= 1) {
                echo "Contando de 1 até $num:\n";
                
                // Laço de repetição de 1 até o número informado
                for ($i = 1; $i <= $num; $i++) {
                    echo $i . "\n";
                }
                } else {
                echo "";
                }
            }
        
        public function regressivo($num){
            if ($num >= 0){
            echo "Contando de $num até 0:\n";

            for ($i = 0; $i <= $num; $i++){
                echo $i . "\n";
            }
            } else {
                echo "";
            }
            
            
        }

        public function soma($num){
            $soma = 0;
            for ($i = 1; $i <= $num; $i++){
                $soma = $soma + $i;
        }
           $this->resultado = $soma;
            return $this->resultado;
        }

        public function sete($num){
            $resultado = "";
            for ($i = 1; $i <= 100; $i++){
                if ($i % $num == 0){
                    $resultado .= $i ."<br>";
                }
            }
            return $resultado;

        }

        public function vinte($num){
            $resultado = "";
            for ($i = 1; $i <= 20; $i++){
                if($i % 2 == 0){
                    $resultado .= $i ."<br>";
                }
            }
            return $resultado;
        }

    }//fim da classe
?>
