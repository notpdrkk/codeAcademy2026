<?php

$linha = "\n--------------------------------\n";

//
echo "Exercicio 01 - Contagem simples com for\n";

for ($i = 1; $i <= 20; $i++):
    echo $i . "\n";
endfor;

echo $linha;

// 
echo "Exercicio 02 - Contagem regressiva com while\n";
$i = 10;

while ($i <= 10 && $i >= 0):
    echo $i . "\n";
    $i--;
endwhile;

echo "Lançar!" . $linha;

//
echo "Exercicio 03 - Soma dos números pares\n";
$soma = 0;

for ($i = 0; $i <= 100; $i++):
    if ($i % 2 == 0):
        $soma += $i;
        echo $soma . "\n";
    endif;
endfor;
echo $linha;

// 
echo "Exercicio 04 - Tabuada com for\n";
$numero = 7;

for ($i = 1; $i < 11; $i++):
    echo "$numero x $i = " . $numero * $i . "\n";
endfor;
echo $linha;

//
echo "Exercicio 05 - Fatorial com while\n";
$n = 6;
$i = 1;
$resultado = 1;

while ($i <= $n):
    $resultado *= $i;
    $i++;
    echo "$resultado\n";
endwhile;
echo $linha;

//
echo "Exercicio 06 - Numeros impares com for + if\n";

for ($i = 1; $i <= 30; $i++):
    if ($i % 2 != 0):
        echo "$i\n";
    endif;
endfor;
echo $linha;

//
echo "Exercicio 07 - Validação com do-while\n";
$tentativas = [15, -3, 7];
$i = 0;

do {
    $nota = $tentativas[$i];

    if ($nota >= 0 && $nota <= 10):
        $notaValida = $nota;
    endif;
    $i++;

} while ($i < count($tentativas));

echo "Nota valida: $notaValida";

echo $linha;

//
echo "Exercicio 08 - Somatório com break\n";

$soma = 0;
for ($i = 1; $i <= 100; $i++):
    $soma += $i;

    if ($soma > 200):
        echo "$soma\n$i";
        echo $linha;
        break;
    endif;
endfor;

//
echo "Exercicio 09 - Pular multiplos de 3 com continue\n";
for ($i = 1; $i <= 20; $i++):
    if ($i % 3 == 0):
        $i++;
        continue;
    endif;
    echo "$i\n";
endfor;

echo $linha;

//
echo "Exercicio 10 - Sequência de Fibonacci\n";
$penultimo = 0;
$ultimo = 1;
echo "$penultimo\n$ultimo\n";

for ($i = 0; $i <= 15; $i++):
    $atual = $ultimo + $penultimo;
    $penultimo = $ultimo;
    $ultimo = $atual;
    echo "$atual\n";
endfor;
echo $linha;

//
echo "Exercício 11 - Média de valores com foreach\n";
$notas = [8.5, 6.0, 9.2, 7.8, 5.5];
$soma = 0;

foreach ($notas as $nota):
    $soma += $nota;
endforeach;

$media = $soma / (count($notas));
echo round($media, 3) . $linha;

//
echo "Exercicio 12 - Maior e menor valor de um array\n";
$valores = [34, 12, 89, 3, 56, 71, 23];
$menor = $valores[0];
$maior = $valores[0];

foreach ($valores as $valor):
    if ($menor > $valor):
        $menor = $valor;
    endif;

    if ($maior < $valor):
        $maior = $valor;
    endif;
endforeach;

echo "Maior = $maior\nMenor = $menor $linha";

//
echo "Exercicio 13 - Inverter uma string com for\n";
$original = "PHP é legal";
$resultado = "";

for ($i = strlen($original) - 1; $i >= 0; $i--):
    $resultado .= $original[$i];
endfor;

echo $resultado; // aqui eu não sabia como fazer o "é" aparecer.

// 
echo "Exercicio 14 - Numeros primos até 50\n";

for ($i = 2; $i <= 50; $i++):
    for ($j = 2; $j < $i; $j++):
        if ($i % $j == 0):
            break;
        endif;
    endfor;

    if ($j == $i):
        echo "$i é primo\n";
    endif;
endfor;

echo $linha;

//
echo "Exercicio 15 - Array associativo com foreach\n";
$aluno = [
    "nome" => "Maria",
    "idade" => 22,
    "curso" => "Engenharia",
    "media" => 8.7
];

foreach ($aluno as $chave => $valor):
    echo "$chave => $valor\n";
endforeach;