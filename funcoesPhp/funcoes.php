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
    
    return "Quadrado de $numero = $quadrado <br><br> Cubo de $numero = $cubo";
}

public function velocidadeMedia(float $distancia, float $tempo){
    if($tempo <= 0){
        return "O tempo deve ser maior que zero!";
    }
    $this->resultado = $distancia / $tempo;
    return round($this->resultado, 2);
}

public function mediaAritmetica(float $num1, float $num2){
    $this->resultado = ($num1 + $num2) / 2;
    return $this->resultado;
}

public function calcularSalario(float $valorHora, float $horasTrabalhadas){
    if($valorHora <= 0 || $horasTrabalhadas <= 0){
        return "Os valores devem ser maiores que zero!";
    }
    $this->resultado = $valorHora * $horasTrabalhadas;
    return number_format($this->resultado, 2, ',', '.'); 
}

public function anosParaDias(int $anos){
    if($anos < 0){
        return "A idade não pode ser negativa!";
    }
    $this->resultado = $anos * 365;
    return $this->resultado;
}

public function tempoAteCemAnos(int $idade){
    if($idade < 0){
        return "A idade não pode ser negativa!";
    }
    if($idade >= 100){
        return "Você já tem 100 anos ou mais!";
    }
    $this->resultado = 100 - $idade;
    return $this->resultado;
}

public function somaEMediaTresNumeros(float $n1, float $n2, float $n3){
    $soma = $n1 + $n2 + $n3;
    $media = $soma / 3;
    
    return "Soma = $soma <br><br> Média = " . round($media, 2);
}

public function areaTrapezio(float $baseMaior, float $baseMenor, float $altura){
    if($baseMaior <= 0 || $baseMenor <= 0 || $altura <= 0){
        return "Os valores devem ser maiores que zero!";
    }
    $this->resultado = (($baseMaior + $baseMenor) * $altura) / 2;
    return $this->resultado;
}

public function diasParaSegundos(int $dias){
    if($dias < 0){
        return "A quantidade de dias não pode ser negativa!";
    }
    $this->resultado = $dias * 86400;
    return $this->resultado;
}

public function somarDigitos(int $numero){
    $numeroStr = (string) abs($numero); 
    $soma = 0;

    for($i = 0; $i < strlen($numeroStr); $i++){
        $soma += (int) $numeroStr[$i];
    }

    return $soma;
}

public function inversoMultiplicativo(float $numero){
    if($numero == 0){
        return "Impossível calcular o inverso multiplicativo de zero!";
    }
    $this->resultado = 1 / $numero;
    return $this->resultado;
}

public function calcularHipotenusa(float $cateto1, float $cateto2){
    if($cateto1 <= 0 || $cateto2 <= 0){
        return "Os catetos devem ser maiores que zero!";
    }
    $this->resultado = hypot($cateto1, $cateto2);
    return round($this->resultado, 2);
}
  
public function converterBinario(int $numero){
    if($numero < 0){
        return "Informe um número inteiro positivo ou zero!";
    }
    return decbin($numero);
}

public function converterHexadecimal(int $numero){
    if($numero < 0){
        return "Informe um número inteiro positivo ou zero!";
    }
    return strtoupper(dechex($numero));
}

public function jurosSimples(float $capital, float $taxa, float $tempo){
    if($capital <= 0 || $taxa < 0 || $tempo <= 0){
        return "Informe valores válidos para o cálculo!";
    }
    
    $juros = $capital * ($taxa / 100) * $tempo;
    $this->resultado = $capital + $juros;
    
    return round($this->resultado, 2);
}

public function jurosCompostos(float $capital, float $taxa, float $tempo){
    if($capital <= 0 || $taxa < 0 || $tempo <= 0){
        return "Informe valores válidos para o cálculo!";
    }
    
    $taxaDecimal = $taxa / 100;
    
    $this->resultado = $capital * pow((1 + $taxaDecimal), $tempo);
    
    return round($this->resultado, 2);
}

public function grausParaRadianos(float $graus){
    $this->resultado = deg2rad($graus);
    return round($this->resultado, 4);
}

public function converterPorcentagem(float $valor){
    $this->resultado = $valor * 100;
    return $this->resultado;
}

public function mediaPonderada(float $n1, float $p1, float $n2, float $p2, float $n3, float $p3){
    $somaPesos = $p1 + $p2 + $p3;
    
    if($somaPesos <= 0){
        return "A soma dos pesos deve ser maior que zero!";
    }
    
    $this->resultado = (($n1 * $p1) + ($n2 * $p2) + ($n3 * $p3)) / $somaPesos;
    return round($this->resultado, 2);
}

public function separarParteInteiraDecimal(float $numero){
    $parteInteira = (int) $numero;
    $parteDecimal = round(abs($numero - $parteInteira), 6);
    
    return "Parte inteira: $parteInteira <br> Parte decimal: $parteDecimal";
}


public function rendimentoSaldo(float $saldo){
    if($saldo < 0){
        return "O saldo não pode ser negativo!";
    }
    
    $taxaFixa = 0.05;
    $this->resultado = $saldo + ($saldo * $taxaFixa);
    
    return round($this->resultado, 2);
}

public function gastoEnergia(float $potenciaWatts, float $horasUso){
    if($potenciaWatts <= 0 || $horasUso <= 0){
        return "A potência e o tempo de uso devem ser maiores que zero!";
    }
    
    $this->resultado = ($potenciaWatts * $horasUso) / 1000;
    return round($this->resultado, 2);
}

    public function fahrenheitParaCelsius(float $fahrenheit){
    $this->resultado = ($fahrenheit - 32) * (5 / 9);
    return round($this->resultado, 2);
}
    public function calcularDensidade(float $massa, float $volume){
    if($massa <= 0 || $volume <= 0){
        return "A massa e o volume devem ser maiores que zero!";
    }
    
    $this->resultado = $massa / $volume;
    return round($this->resultado, 2);
}

public function multiploMaisProximoDeDez(float $numero){
    $this->resultado = round($numero / 10) * 10;
    return $this->resultado;
}

public function converterOctal(int $numero){
    if($numero < 0){
        return "Informe um número inteiro positivo ou zero!";
    }
    return decoct($numero);


} 

public function contagemCrescente(int $numero){
    if($numero <= 0){
        return "Informe um número inteiro positivo maior que zero!";
    }

    $sequencia = "";
    for($i = 1; $i <= $numero; $i++){
        $sequencia .= $i . " ";
    }

    return trim($sequencia);
}

public function contagemRegressiva(int $numero){
    if($numero <= 0){
        return "Informe um número inteiro positivo maior que zero!";
    }

    $sequencia = "";
    for($i = $numero; $i >= 0; $i--){
        $sequencia .= $i . " ";
    }

    return trim($sequencia);
}

    }//fim da classe
?>
