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

public function somaAteN(int $numero){
    if($numero <= 0){
        return "Informe um número inteiro positivo maior que zero!";
    }

    $soma = 0;
    for($i = 1; $i <= $numero; $i++){
        $soma += $i;
    }

    $this->resultado = $soma;
    return $this->resultado;
}


public function multiplosAteCem(int $numero){
    if($numero == 0){
        return "Informe um número inteiro diferente de zero!";
    }

    $multiplos = "";
    for($i = 1; $i <= 100; $i++){
        if($i % $numero === 0){
            $multiplos .= $i . " ";
        }
    }

    if($multiplos === ""){
        return "Não há múltiplos de $numero entre 1 e 100.";
    }

    return trim($multiplos);
}


public function contarParesVinte(array $numeros){
    $pares = 0;

    for($i = 0; $i < 20; $i++){
        if(isset($numeros[$i]) && $numeros[$i] !== ""){
            if((int)$numeros[$i] % 2 === 0){
                $pares++;
            }
        }
    }

    $this->resultado = $pares;
    return $this->resultado;
}


public function tabuadaPersonalizada(int $numero){
    $tabuada = "";
    for($i = 1; $i <= 10; $i++){
        $produto = $numero * $i;
        $tabuada .= "$numero x $i = $produto <br>";
    }

    return $tabuada;
}


public function mediaOitoNotas(array $notas){
    $soma = 0;

    for($i = 0; $i < 8; $i++){
        if(!isset($notas[$i]) || $notas[$i] === ""){
            return "Preencha todas as 8 notas!";
        }
        $soma += (float)$notas[$i];
    }

    $media    = round($soma / 8, 2);
    $situacao = ($media >= 7) ? "Aprovado" : "Reprovado";

    return "Média: $media — Situação: $situacao";
}

public function analisarTemperaturas(array $temperaturas){
    $soma          = 0;
    $diasAcimaDe30 = 0;

    for($i = 0; $i < 7; $i++){
        if(!isset($temperaturas[$i]) || $temperaturas[$i] === ""){
            return "Preencha as temperaturas de todos os 7 dias!";
        }

        $temp  = (float)$temperaturas[$i];
        $soma += $temp;

        if($temp > 30){
            $diasAcimaDe30++;
        }
    }

    $media = round($soma / 7, 2);

    return "Média das temperaturas: $media °C <br> Dias acima de 30 °C: $diasAcimaDe30";
}



public function somaImparesAteN(int $numero){
    if($numero <= 0){
        return "Informe um número inteiro positivo maior que zero!";
    }

    $soma = 0;
    for($i = 1; $i <= $numero; $i++){
        if($i % 2 !== 0){
            $soma += $i;
        }
    }

    $this->resultado = $soma;
    return $this->resultado;
}



public function calcularFatorial(int $numero){
    if($numero < 0){
        return "Informe um número inteiro não negativo (maior ou igual a zero)!";
    }

    $fatorial = 1;
    for($i = 2; $i <= $numero; $i++){
        $fatorial *= $i;
    }

    $this->resultado = $fatorial;
    return $this->resultado;
}


public function somaQuadradosAteN(int $numero){
    if($numero <= 0){
        return "Informe um número inteiro positivo maior que zero!";
    }

    $soma = 0;
    for($i = 1; $i <= $numero; $i++){
        $soma += ($i * $i);
    }

    $this->resultado = $soma;
    return $this->resultado;
}


public function divisibilidadePorTres(array $numeros){
    $divisiveis    = 0;
    $naoDivisiveis = 0;

    for($i = 0; $i < 30; $i++){
        if(!isset($numeros[$i]) || $numeros[$i] === ""){
            return "Preencha todos os 30 números!";
        }

        if((int)$numeros[$i] % 3 === 0){
            $divisiveis++;
        }else{
            $naoDivisiveis++;
        }
    }

    return "Divisíveis por 3: $divisiveis <br> Não divisíveis por 3: $naoDivisiveis";
}


public function validarSenha(string $senhaDigitada){
    $senhaCorreta = "1234";

    while($senhaDigitada !== $senhaCorreta){
        return "Senha incorreta! Tente novamente.";
    }

    return "Acesso permitido! Senha correta.";
}

public function acumularAteDuzentos(array $numeros){
    $soma       = 0;
    $i          = 0;
    $totalItens = count($numeros);
    $utilizados = [];

    while($i < $totalItens && $soma <= 200){
        $valor        = (int)$numeros[$i];
        $soma        += $valor;
        $utilizados[] = $valor;
        $i++;
    }

    $listaTexto = implode(" + ", $utilizados);

    if($soma > 200){
        return "Limite ultrapassado! Soma final: $soma ($listaTexto)";
    }

    return "Soma parcial: $soma ($listaTexto). Continue informando números.";
}



public function validarIdade(int $idade){
    while($idade < 0 || $idade > 120){
        return "Idade inválida! Informe uma idade entre 0 e 120 anos.";
    }

    return "Idade válida registrada: $idade anos.";
}


public function contarPositivosAteNegativo(array $numeros){
    $positivos  = 0;
    $i          = 0;
    $totalItens = count($numeros);
    $encerrado  = false;

    while($i < $totalItens){
        $valor = (int)$numeros[$i];

        if($valor < 0){
            $encerrado = true;
            break;
        }

        if($valor > 0){
            $positivos++;
        }

        $i++;
    }

    if($encerrado){
        return "Leitura encerrada! Quantidade de números positivos digitados: $positivos";
    }

    return "Positivos contabilizados até agora: $positivos. Continue digitando (ou informe um negativo para encerrar).";
}


public function divisaoSucessivaPorDois(int $numero){
    if($numero <= 0){
        return "Informe um número inteiro positivo maior que zero!";
    }

    $etapas = [];
    $atual  = $numero;

    while($atual >= 1){
        $etapas[] = $atual;
        $atual    = intdiv($atual, 2);
    }

    $etapas[] = $atual; // Exibe o valor final menor que 1 (0)

    return "Sequência de divisões inteiras por 2: " . implode(" -> ", $etapas);
}

public function crescimentoInvestimento(float $valorInicial = 1000.00, float $taxaMensal = 0.02, float $meta = 2000.00){
    if($valorInicial <= 0 || $taxaMensal <= 0 || $meta <= $valorInicial){
        return "Informe valores válidos onde a meta seja maior que o valor inicial!";
    }

    $saldo = $valorInicial;
    $meses = 0;

    while($saldo <= $meta){
        $saldo += $saldo * $taxaMensal;
        $meses++;
    }

    $this->resultado = $meses;
    $saldoFormatado  = number_format($saldo, 2, ',', '.');

    return "Serão necessários $meses meses para ultrapassar R$ " . number_format($meta, 2, ',', '.') . " (Saldo final: R$ $saldoFormatado).";
}


public function localizarNumeroCinquenta(array $numeros){
    $tentativas = 0;
    $i          = 0;
    $totalItens = count($numeros);
    $encontrado = false;

    while($i < $totalItens){
        $valor = (int)$numeros[$i];
        $tentativas++;

        if($valor === 50){
            $encontrado = true;
            break;
        }

        $i++;
    }

    if($encontrado){
        return "Número 50 encontrado! Foram necessários $tentativas número(s) até encontrá-lo.";
    }

    return "Tentativas até agora: $tentativas. Continue digitando números inteiros até encontrar o 50.";
}

public function somaDigitos(int $numero){
    if($numero <= 0){
        return "Informe um número inteiro positivo maior que zero!";
    }

    $soma  = 0;
    $atual = $numero;

    while($atual > 0){
        $digito = $atual % 10;
        $soma  += $digito;
        $atual  = intdiv($atual, 10);
    }

    $this->resultado = $soma;
    return $this->resultado;
}

public function adivinharNumero(array $palpites){
    $numeroSecreto = 42; 
    $tentativas    = 0;
    $i             = 0;
    $totalItens    = count($palpites);
    $acertou       = false;
    $ultimoPalpite = 0;

    while($i < $totalItens){
        $ultimoPalpite = (int)$palpites[$i];
        $tentativas++;

        if($ultimoPalpite === $numeroSecreto){
            $acertou = true;
            break;
        }

        $i++;
    }

    if($acertou){
        return "Parabéns! Você acertou o número secreto ($numeroSecreto) em $tentativas tentativa(s)!";
    }

    if($numeroSecreto > $ultimoPalpite){
        return "Tentativa #$tentativas ($ultimoPalpite): O número secreto é MAIOR que o seu palpite.";
    }

    return "Tentativa #$tentativas ($ultimoPalpite): O número secreto é MENOR que o seu palpite.";
}


public function contagemRegressivaIntervalo(int $inicio, int $fim){
    if($inicio < $fim){
        return "O valor inicial deve ser maior ou igual ao valor final para a contagem regressiva!";
    }

    $sequencia = [];
    $atual     = $inicio;

    while($atual >= $fim){
        $sequencia[] = $atual;
        $atual--;
    }

    return implode(" ", $sequencia);
}

public function menuOperacoesDoWhile(int $opcao, float$num1 = 0, float $num2 = 0){$mensagem = "";

    do {
        if($opcao === 0){$mensagem = "Programa encerrado! Você escolheu sair (opção 0).";
            break;
        }

        switch($opcao){
            case 1:
                $calc     = $num1 +$num2;
                $mensagem = "Resultado da Soma: $num1 + $num2 =$calc";
                break;
            case 2:
                $calc     = $num1 -$num2;
                $mensagem = "Resultado da Subtração: $num1 - $num2 =$calc";
                break;
            case 3:
                $calc     = $num1 * $num2;
                $mensagem = "Resultado da Multiplicação: $num1 × $num2 =$calc";
                break;
            case 4:
                if($num2 == 0){$mensagem = "Erro: Não é possível dividir por zero!";
                }else{
                    $calc     = round($num1 / $num2, 2);$mensagem = "Resultado da Divisão: $num1 ÷ $num2 =$calc";
                }
                break;
            default:
                $mensagem = "Opção inválida! Escolha entre 1, 2, 3, 4 ou 0 para sair.";
                break;
        }

        break;
    } while($opcao !== 0);

    return $mensagem;
}

public function cadastrarProdutosDoWhile(array $produtos, bool $finalizar = false){
    $totalItens = count($produtos);
    if($totalItens === 0){
        return "Nenhum produto cadastrado ainda.";
    }

    $quantidade = 0;
    $valorTotal = 0.0;
    $linhas     = [];
    $i          = 0;

    do {
        $nome        = htmlspecialchars($produtos[$i]['nome']);
        $preco       = (float)$produtos[$i]['preco'];
        $valorTotal += $preco;
        $quantidade++;
        $linhas[]    = "$quantidade. $nome — R$ " . number_format($preco, 2, ',', '.');
        $i++;
    } while($i < $totalItens);

    $listaHtml = implode("<br>", $linhas);
    $totalFmt  = number_format($valorTotal, 2, ',', '.');

    if($finalizar){
        return "<strong>Cadastro finalizado!</strong><br><br>$listaHtml<br><br>Quantidade de produtos cadastrados: <strong>$quantidade</strong><br>Valor total: <strong>R$ $totalFmt</strong>";
    }

    return "<strong>Produtos adicionados até o momento ($quantidade):</strong><br>$listaHtml<br>Subtotal: R$ $totalFmt";
}


public function calculadoraMediaAlunosDoWhile(array $alunos, bool$encerrado = false){
    $totalAlunos = count($alunos);
    if($totalAlunos === 0){
        return "Nenhum aluno calculado ainda.";
    }

    $linhas = [];$i      = 0;

    do {
        $nome  = htmlspecialchars($alunos[$i]['nome']);
        $nota1 = (float)$alunos[$i]['nota1'];
        $nota2 = (float)$alunos[$i]['nota2'];
        $nota3 = (float)$alunos[$i]['nota3'];

        $media    = round(($nota1 + $nota2 + $nota3) / 3, 2);
        $situacao = ($media >= 7) ? "Aprovado" : "Reprovado";

        $linhas[] = ($i + 1) . ". <strong>$nome</strong> — Notas: [$nota1, $nota2, $nota3] | Média: <strong>$media</strong> ($situacao)";
        $i++;
    } while($i <$totalAlunos);

    $historicoHtml = implode("<br>", $linhas);

    if($encerrado){
        return "<strong>Cálculos encerrados! Total de alunos avaliados: $totalAlunos</strong><br><br>$historicoHtml";
    }

    return "<strong>Histórico de médias calculadas ($totalAlunos):</strong><br>$historicoHtml";
}

public function caixaEletronicoDoWhile(array $operacoes){$saldo       = 1500.00;
    $totalOps    = count($operacoes);$i           = 0;
    $ultimaMsg   = "Saldo inicial: R$ 1.500,00";
    $encerrado   = false;

    if($totalOps === 0){
        return $ultimaMsg;
    }

    do {
        $opcao = (int)$operacoes[$i]['opcao'];$valor = (float)$operacoes[$i]['valor'];

        if($opcao === 0){$ultimaMsg = "Atendimento encerrado! Saldo final: R$ " . number_format($saldo, 2, ',', '.');$encerrado = true;
            break;
        }

        switch($opcao){
            case 1: // Consultar saldo
                $ultimaMsg = "Consulta realizada — Saldo disponível: R$ " . number_format($saldo, 2, ',', '.');
                break;

            case 2: // Realizar saque
                if($valor <= 0){$ultimaMsg = "Valor inválido! Informe um valor de saque maior que zero.";
                }else if($valor > $saldo){$ultimaMsg = "Saque negado! Saldo insuficiente (Disponível: R$ " . number_format($saldo, 2, ',', '.') . ").";
                }else{
                    $saldo    -=$valor;
                    $ultimaMsg = "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado! Novo saldo: R$ " . number_format($saldo, 2, ',', '.');
                }
                break;

            case 3: // Realizar depósito
                if($valor <= 0){$ultimaMsg = "Valor inválido! Informe um valor de depósito maior que zero.";
                }else{
                    $saldo    +=$valor;
                    $ultimaMsg = "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado! Novo saldo: R$ " . number_format($saldo, 2, ',', '.');
                }
                break;

            default:
                $ultimaMsg = "Opção inválida! Escolha 1, 2, 3 ou 0.";
                break;
        }

        $i++;
    } while($i < $totalOps && !$encerrado);

    return $ultimaMsg;
}


public function pesquisaSatisfacaoDoWhile(array $avaliacoes, bool $finalizar = false){
    $totalItens = count($avaliacoes);
    if($totalItens === 0){
        return "Nenhuma avaliação registrada ainda.";
    }

    $quantidade = 0;
    $somaNotas  = 0;
    $i          = 0;

    do {
        $nota = (int)$avaliacoes[$i];
        if($nota >= 1 && $nota <= 5){
            $somaNotas += $nota;
            $quantidade++;
        }
        $i++;
    } while($i < $totalItens);

    $media = ($quantidade > 0) ? round($somaNotas / $quantidade, 2) : 0;

    if($finalizar){
        return "<strong>Pesquisa finalizada!</strong><br>Quantidade de avaliações: <strong>$quantidade</strong><br>Média obtida: <strong>$media</strong> (de 1 a 5)";
    }

    return "Avaliações registradas até o momento: <strong>$quantidade</strong> (Média parcial: <strong>$media</strong>)";
}


public function calculadoraDescontosDoWhile(array $compras, bool $finalizar = false){
    $totalCompras = count($compras);
    if($totalCompras === 0){
        return "Nenhuma compra calculada ainda.";
    }

    $linhas = [];
    $i      = 0;

    do {
        $valorOriginal = (float)$compras[$i];

        if($valorOriginal > 200.00){
            $desconto   = $valorOriginal * 0.10;
            $valorFinal = $valorOriginal - $desconto;
            $infoDesc   = "Desconto de 10% (-R$ " . number_format($desconto, 2, ',', '.') . ")";
        }else{
            $valorFinal = $valorOriginal;
            $infoDesc   = "Sem desconto (até R$ 200,00)";
        }

        $origFmt  = number_format($valorOriginal, 2, ',', '.');
        $finalFmt = number_format($valorFinal, 2, ',', '.');

        $linhas[] = ($i + 1) . ". Compra: R$ $origFmt | $infoDesc | <strong>Valor final: R$ $finalFmt</strong>";
        $i++;
    } while($i < $totalCompras);

    $historicoHtml = implode("<br>", $linhas);

    if($finalizar){
        return "<strong>Cálculos encerrados! Total de compras analisadas: $totalCompras</strong><br><br>$historicoHtml";
    }

    return "<strong>Compras calculadas até o momento ($totalCompras):</strong><br>$historicoHtml";
}


public function controleAcessoDoWhile(array $tentativas, bool $encerrado = false){
    $usuarioCorreto = "admin";
    $senhaCorreta   = "1234";

    $totalTentativas = count($tentativas);
    if($totalTentativas === 0){
        return "Nenhuma tentativa realizada ainda.";
    }

    $i          = 0;
    $autenticado = false;
    $ultimoUsuario = "";

    do {
        $ultimoUsuario = htmlspecialchars($tentativas[$i]['usuario']);
        $senha         = $tentativas[$i]['senha'];

        if($tentativas[$i]['usuario'] === $usuarioCorreto && $senha === $senhaCorreta){
            $autenticado = true;
            break;
        }

        $i++;
    } while($i < $totalTentativas);

    if($autenticado){
        return "<strong>Acesso autorizado!</strong> Bem-vindo(a), <strong>$ultimoUsuario</strong>. (Autenticado na tentativa #" . ($i + 1) . ")";
    }

    if($encerrado){
        return "<strong>Acesso encerrado pelo usuário.</strong> Dados incorretos na última tentativa (Usuário: <strong>$ultimoUsuario</strong>). Total de tentativas: $totalTentativas.";
    }

    return "<strong>Dados incorretos!</strong> Usuário ou senha inválidos para <strong>$ultimoUsuario</strong>. (Tentativa #$totalTentativas)";
}


public function conversorMoedasDoWhile(array $conversoes, bool $finalizar = false){
    $totalOperacoes = count($conversoes);
    if($totalOperacoes === 0){
        return "Nenhuma conversão realizada ainda.";
    }

    $linhas = [];
    $i      = 0;

    do {
        $reais   = (float)$conversoes[$i]['reais'];
        $cotacao = (float)$conversoes[$i]['cotacao'];

        if($cotacao <= 0){
            $linhas[] = ($i + 1) . ". Cotação inválida (deve ser maior que zero).";
        }else{
            $dolares    = $reais / $cotacao;
            $reaisFmt   = number_format($reais, 2, ',', '.');
            $cotacaoFmt = number_format($cotacao, 2, ',', '.');
            $dolaresFmt = number_format($dolares, 2, '.', ',');

            $linhas[] = ($i + 1) . ". R$ $reaisFmt (Cotação: R$ $cotacaoFmt) = <strong>US$ $dolaresFmt</strong>";
        }

        $i++;
    } while($i < $totalOperacoes);

    $historicoHtml = implode("<br>", $linhas);

    if($finalizar){
        return "<strong>Conversões encerradas! Total de operações realizadas: $totalOperacoes</strong><br><br>$historicoHtml";
    }

    return "<strong>Conversões realizadas até o momento ($totalOperacoes):</strong><br>$historicoHtml";
}


    }//fim da classe
?>
