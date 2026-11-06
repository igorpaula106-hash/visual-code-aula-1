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

        }

     public function areaCirculo(float $raio){


    }
      
    
    public function celsiusParaFahrenheit(float $celsius){
    $resultado = ($celsius * 1.8) + 32;
    return $resultado;
    }


    public function aplicarDesconto(float $valor){
    $this->resultado = $valor * 0.90; // Tira 10% do valor total
    return $this->resultado;
   }


   public function anosParaMeses(int $anos){
    $this->resultado = $anos * 12;
    return $this->resultado;
   }


   public function verificarParImpar(int $numero){
    $respostas = [
        0 => "O número $numero é PAR!",
        1 => "O número $numero é ÍMPAR!"
    ];


    $posicao = abs($numero % 2);

    $this->resultado = $respostas[$posicao];
    return $this->resultado;
}

 public function areaTriangulo(float $base, float $altura){
    if($base <= 0 || $altura <= 0){
        return "A base e a altura devem ser maiores que zero!";
    }
    $this->resultado = ($base * $altura) / 2;
    return $this->resultado;
}

public function volumeCaixa(float $comprimento, float $largura, float $altura){
    if($comprimento <= 0 || $largura <= 0 || $altura <= 0){
        return "As dimensões devem ser maiores que zero!";
    }
    $this->resultado = $comprimento * $largura * $altura;
    return $this->resultado;
}

public function quadradoECubo(float $numero){
    $quadrado = pow($numero, 2);
    $cubo = pow($numero, 3);
    
    $this->resultado = "Quadrado de $numero = $quadrado <br><br> Cubo de $numero = $cubo";
    return $this->resultado;
}

    
    }//fim da classe
?>
