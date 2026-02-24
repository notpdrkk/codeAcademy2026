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
// ...