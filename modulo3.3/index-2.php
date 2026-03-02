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
$string = "arquivo_relatorio.pdf";

echo str_starts_with($string, "arquivo") ? "true\n" : "false\n";
echo str_ends_with($string, ".pdf") ? "true" : "false";
echo $linha;

//
echo "Exercicio 16 - Verificar sem contém substring\n";

$string = "O PHP eh uma linguagem de programação server-side";

echo str_contains($string, "server-side") ? "true\n" : "false\n";
echo str_contains($string, "client-side") ? "true" : "false";
echo $linha;

//
echo "Exercicio 17 - Embaralhar e extrair caracteres aleatórios\n";

$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$embaralhada = str_shuffle($string);

echo substr($embaralhada, 0, 8 );
echo $linha;

//
echo "Exercicio 18 - Contagem de palavras\n";

$string = "PHP eh uma linguagem popular para desenvolvimento web";
$array = explode (" ", $string);

echo str_word_count($string), "\n";
print_r($array);

echo $linha;