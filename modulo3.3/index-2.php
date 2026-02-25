<?php

$linha = "\n--------------------------------\n";

//
echo "Exercicio 11 - Dividir string em array\n";
$string = "João,Maria,Pedro,Ana\n";

print_r(explode(",", $string));

echo $linha;

//
echo "Exercicio 12 - Juntar array em string\n";
$array = ["HTML", "CSS", "Javascript", "PHP"];

echo implode ("|", $array) . $linha;

//
echo "Exercicio 13 - Preencher string (padding)\n";
$numero = "42";

echo str_pad($numero, 5, "0", STR_PAD_LEFT) . "\n";
echo str_pad($numero, 10, ".", STR_PAD_RIGHT) . $linha;

//
echo "Exercicio 14 - Formatar numero como moeda\n";
$valor = 1234567.891;

echo number_format($valor, 2, ",", ".");
echo $linha;

//
echo "Exercicio 15 - Verificar inicio e fim da string\n";
$string = "arquivo_relatorio.pdl\n";
