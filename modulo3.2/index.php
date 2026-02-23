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
    if ($i % 2 == 0){
        $soma += $i;
        echo $soma . "\n";
    }
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

while ($i <= $n){
    $resultado *= $i;
    $i++;
    echo "$resultado\n";
}
echo $linha;

//
echo "Exercicio 06 - Numeros impares com for + if\n";

for ($i = 1; $i <= 30; $i++){
    if ($i % 2 != 0){
        echo "$i\n";
    }
}
echo $linha;

//
echo "Exercicio 07 - Validação com do-while\n";
$tentativas = [15, -3, 7];




echo $linha;

//
echo "Exercicio 08 - Somatório com break\n";

$soma = 0;
for ($i = 1; $i <= 100; $i++){
    $soma += $i;

    if ($soma > 200){
        echo "$soma\n$i";
        echo $linha;
        break;
    }
}

//
echo "Exercicio 09 - Pular multiplos de 3 com continue\n";
for ($i = 1; $i <= 20; $i++){
    echo "$i\n";
    if ($i % 3 != 0){
        $i++;
        continue;
    }
    
    
}
