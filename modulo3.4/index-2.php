<?php

$linha = "\n--------------------------------\n";

//
echo "Exercicio 13 - Soma e média de valores\n";

$salarios = [2500, 3200, 1800, 4500, 2900, 3700];
$menor = $salarios[0];
$maior = $salarios[0];

foreach ($salarios as $sal){
    if ($sal > $maior){
        $maior = $sal;
    }

    if ($sal < $menor){
        $menor = $sal;
    }
}

echo "Soma: ", array_sum($salarios), "\n";
echo "Média: ", array_sum($salarios)/count($salarios), "\n";
echo "Menor salário: $menor | Maior salário: $maior";
echo $linha;

//
echo "Exercicio 14 - Filtrando elementos com array_filter\n";

$idades = [12, 18, 25, 15, 30, 17, 21, 16];


