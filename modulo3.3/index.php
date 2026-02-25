<?php

$linha = "\n--------------------------------\n";

//
echo "Exercicio 01 - Comprimento de uma string\n";
$frase1 = "Aprender PHP eh divertido!";
$frase2 = "Aprender PHP é divertido!";

echo strlen($frase1) . "\n";
echo strlen($frase2) . $linha;

//
echo "Exercicio 02 - Converter para maisculas e minisculas\n";
$frase = "Hello, World!";

echo strtoupper($frase) . "\n";
echo strtolower($frase) . $linha;

//
echo "Exercicio 03 - Primeira letra maiuscula\n";
$string1 = "programação web";
$string1 = "programação web";

echo ucfirst($string1) . "\n";
echo ucwords($string1) . $linha;

//
echo "Exercicio 04 - Extrair parte de uma string\n";
$string = "abcdefghij";

echo "$string\n";
echo substr($string, 0, 3) . "\n";
echo substr($string, 3, 4) . "\n";
echo substr($string, -2);

echo $linha;

//
echo "Exercicio 05 - Encontrar posição de substring\n";
$string = "O rato roeu a roupa do rei de Roma";

echo strpos($string, 'roupa') . "\n";
echo strrpos($string, 'r') . "$linha";

//
echo "Exercicio 06 - Substituir texto\n";
$string = "Eu gosto de Java";
$string2 = "Eu gosto de JAVA e java";

echo substr_replace($string, "PHP", 12, 15) . "\n";
echo substr_replace($string2, "PHP e PHP", 12, 15) . "$linha";

//
echo "Exercicio 07 - Remover espaços em branco\n";
$string = " Olá, Mundo! ";

echo "Removendo espaços no inicio: " . ltrim($string) . "\n";
echo "Removendo espaços no fim: " . rtrim($string) . "\n";
echo "Removendo espaços do inicio e fim: " . ltrim(rtrim($string));
echo $linha;

//
echo "Exercicio 08 - Repetir uma string\n";
for ($i = 1; $i <= 40; $i++):
    echo "-";
endfor;

echo "\n";

for ($i = 1; $i <= 20; $i++):
    echo "*";
endfor;

echo $linha;

//
echo "Exercicio 09 - Inverter uma string\n";
$string = "PHP";
$string2 = "arara";

echo strrev($string), "\n";

$invertida = strrev($string2);

if ($invertida === $string2):
    echo "É palíndromo";
else:
    echo "Não é palindromo";
endif;

echo $linha;

//
echo "Contar ocorrências de substring\n";
$string = "banana";
echo substr_count ($string, "ana") . "\n";
echo substr_count ($string, "a");
echo $linha;