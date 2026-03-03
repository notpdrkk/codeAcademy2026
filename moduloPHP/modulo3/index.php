<?php 

$linha = "\n--------------------------------\n";

// 
echo $linha;
echo "Exercicio 01 - Apresentação pessoal\n";
$nome = "João";
$idade = 25;
$altura = 1.75;

echo "Meu nome é " . $nome . ", tenho " . $idade . " anos e meço " . $altura . "m";
echo $linha;

//
echo "Exercicio 02 - Verificador de tipo\n";
$total1 = 42;
$total2 = 3.14;
$total3 = "PHP";
$total4 = true;
$total5 = null;

echo gettype($total1) . "\n";
echo gettype($total2) . "\n";
echo gettype($total3) . "\n";
echo gettype($total4) . "\n";
echo gettype($total5);
echo $linha;

//
echo "Exercicio 03 - Calculadora de IMC\n";
$peso = 65;
$altura = 1.75;

$imc = $peso / ($altura * $altura);
echo "Seu imc é: " . number_format($imc, 2);
echo $linha;

//
echo "Exercicio 04 - Troca de totales \n";
$a = 10;
$b = 20;
echo "totales iniciais: " . $a . " e " . $b . "\n";

$b -= $b - $a; 
$a += $b;
echo "totales finais: " . $a . " e " . $b;
echo $linha;

//
echo "Exercicio 05 - Conversor de temperatura\n"; 
$celsius = 35.6;
$fahrenheit =  $celsius * 9/5 + 32;
$kelvin = $celsius + 273.15;
echo "Celsius: " . $celsius . "\nFahrenheit: " . $fahrenheit . "\nKelvin: " . $kelvin;
echo $linha;

//
echo "Exercicio 06 - Operadores de comparacão\n";
$x = "10";
$y = 10;

echo ($x == $y) ? "true" : "false\n"; // true, pois os totales (10) das variaveis sao os mesmos;
echo "\n";
echo ($x ===  $y) ? "true" : "false"; // false, pois o tipo das variáveis são diferentes (string e int);
echo "\n";
echo ($x != $y) ? "true" : "false"; // false, compara se os totales são diferentes, sendo que são iguais;
echo "\n";
echo ($x !== $y) ? "true" : "false";  // true, compara se o tipos das variáveis são diferentes, o que resulta em true;
echo $linha;

//
echo "Exercicio 07 - Par ou ímpar com operador módulo\n";
$numero = 11;

if ($numero % 2 == 0){
    echo "É par";
} else {
    echo "É impar";
}
echo $linha;

//
echo "Exercicio 08 - Casting explicito\n"; 
$total = "123abc";
echo (int) $total . ", ";
echo (float) $total . ", ";
echo (bool) $total . "\n";

$total = " ";
echo (int) $total . ", ";
echo (float) $total . ", ";
echo (bool) $total . "\n";

$total = 0;
echo (int) $total . ", ";
echo (float) $total . ", ";
echo (bool) $total;

echo $linha;

// 
echo "Exercicio 09 - Operadores de atribuição combinados\n";
$total = 100;

$total += 50; 
echo $total . "\n";
$total -= 30; 
echo $total . "\n";
$total *= 50; 
echo $total . "\n";
$total /= 4; 
echo $total . "\n";
$total %= 7; 
echo $total . "\n";
$total .= " reais";
echo $total;

echo $linha;

//
echo "Exercicio 10 - Operadores Logicos\n";
$idade = 20; 
$possuiCNH = true;
$estaBebado = false;

echo ($idade >= 18 && $possuiCNH == true && $estaBebado == false) ? "Pode dirigir" : "Não pode dirigir";
echo ($possuiCNH == false || $estaBebado == true) ? "\nPrecisa de carona!" : "";

echo $linha;

//
echo "Exercicio 11 - Incremento e Decremento\n";
$contador = 5;

echo ++$contador. "\n";  // no Pré-incremento, a variavel é atribuida em 1, e depois retornada
echo $contador++ . "\n"; // já no Pós-incremento, a variavel é retornada e depois incrementa
var_dump ( $contador); // Portanto precisamos chamá-la novamente para ver seu novo valor, com echo ou vardump

echo --$contador . "\n"; 
echo $contador-- . "\n"; 
var_dump($contador);

echo $linha;

//
echo "Exercicio 12 - Interpolação vs. concatenação\n";
$produto = "Notebook";
$preco = 3500.99;

echo "O produto " . $produto . " custa R$" . $preco . ".";
echo $linha;

//
echo "Exercicio 13 - Simulador de desconto\n";
$precoOriginal = 250;
$desconto = 15; 
$precoFinal = $precoOriginal - ($precoOriginal * 0.15);

echo "Preço final: R$" . $precoFinal;
echo ($precoFinal >= 200) ? "\nCompra cara" : "\nCompra barata"; 

echo $linha;

//
echo "Exercicio 14 - Verificador de tipo com is_*\n";

$tipo1 = 42;
$tipo2 = "42";
$tipo3 = true;

echo "Variavel 1: \n" . is_int($tipo1) . "\n" . is_float($tipo1) . "\n" . is_string($tipo1) . 
"\n" . is_bool($tipo1) . "\n" . is_null($tipo1) . "\n" . is_numeric($tipo1);

echo "\nVariavel 2: \n" . is_int($tipo2) . "\n" . is_float($tipo2) . "\n" . is_string($tipo2) . 
"\n" . is_bool($tipo2) . "\n" . is_null($tipo2) . "\n" . is_numeric($tipo2);

echo "\nVariavel 3: \n" . is_int($tipo3) . "\n" . is_float($tipo3) . "\n" . is_string($tipo3) . 
"\n" . is_bool($tipo3) . "\n" . is_null($tipo3) . "\n" . is_numeric($tipo3);
echo $linha;

//
echo "Exercicio 15 - Operador null coalescing\n";

$nome = $nomeUsuario ?? "Visitante";
$tema = $temaEscolhido ?? $temaPadrao ?? "claro";

echo $nome . "\n"; echo $tema;
echo $linha;

// 
echo "Exercicio 16 - Cálculo de parcelas\n";
$valorTotal = 1899.90;
$numParcelas = 6;

$valorParcelas = $valorTotal/$numParcelas;

echo floor($valorParcelas) . "\n";
echo ceil($valorParcelas) . "\n";
echo round($valorParcelas, 2, PHP_ROUND_HALF_ODD);
echo $linha;

//
echo "Exercicio 17 - Mini sistema de notas\n";
$nota1 = 7.5; $nota2 = 8.0; $nota3 = 6.5;
$peso1 = 2; $peso2 = 3; $peso3 = 5;

$mediaNotas = ($nota1 + $nota2 + $nota3) / 3;
echo ($mediaNotas >= 7 ? "Aprovado" : ($mediaNotas >= 5 ? "Recuperacao" : "Reprovado"));
echo $linha;