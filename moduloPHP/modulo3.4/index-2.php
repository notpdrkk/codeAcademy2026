<?php

$linha = "\n--------------------------------\n";

//
echo "Exercicio 13 - Soma e média de valores\n";

$salarios = [2500, 3200, 1800, 4500, 2900, 3700];
$menor = $salarios[0];
$maior = $salarios[0];

foreach ($salarios as $sal) {
    if ($sal > $maior) {
        $maior = $sal;
    }

    if ($sal < $menor) {
        $menor = $sal;
    }
}

echo "Soma: ", array_sum($salarios), "\n";
echo "Média: ", array_sum($salarios) / count($salarios), "\n";
echo "Menor salário: $menor | Maior salário: $maior";
echo $linha;

//
echo "Exercicio 14 - Filtrando elementos com array_filter\n";

$idades = [12, 18, 25, 15, 30, 17, 21, 16];

$arr = array_filter($idades, fn($idade) => $idade >= 18);

print_r($arr);
echo $linha;

//
echo "Exercicio 15 - Transformando elementos com array_map\n";

$precos = [100, 250, 80, 320, 150];
$precosNovos = array_map(fn($preco) => $preco * 0.9, $precos);


print_r($precos);
print_r($precosNovos);

echo $linha;

//
echo "Exercicio 16 - Array multidimensional\n";

$alunos = [
    ["nome" => "João", "nota1" => 5, "nota2" => 7.5, "nota3" => 6],
    ["nome" => "Pedro", "nota1" => 10, "nota2" => 8.6, "nota3" => 9],
    ["nome" => "Maria", "nota1" => 6.7, "nota2" => 9.5, "nota3" => 7],
    ["nome" => "Gustavo", "nota1" => 4.7, "nota2" => 8, "nota3" => 6.5]
];

print_r($alunos);

foreach ($alunos as $aluno) {
    $media = ($aluno["nota1"] + $aluno["nota2"] + $aluno["nota3"]) / 3;

    echo $aluno["nome"], "|", number_format($media, 1), "|";

    echo ($media >= 7) ? "Aprovado\n" : "Reprovado\n";
}

echo $linha;

//
echo "Exercicio 17 - Trabalhando com chaves (array_keys e array_values)\n";

$estoque = [
    "Camiseta" => 50,
    "Calça" => 30,
    "Tênis" => 15,
    "Boné" => 80,
    "Meia" => 100
];

print_r(array_keys($estoque));
print_r(array_values($estoque));

echo $linha;

//
echo "Exercicio 18 - Combinando arrays com array_combine\n";

$disciplinas = ['PHP', 'Javascript', 'Python', 'Java'];
$notas = [8.5, 7.0, 9.2, 6.8];

print_r(array_combine($disciplinas, $notas));

echo "array_combine pega dois arrays e forma apenas um, sendo o array 1 como chave, e o array 2 como valor
Já no array_merge, você dá dois arrays e ele junta os valores em um array novo $linha";

//
echo "Exercicio 19 - Reduzindo um array com array_reduce\n";

$itens = [
    ['nome' => 'Mouse', 'preco' => 50],
    ['nome' => 'Teclado', 'preco' => 120],
    ['nome' => 'Monitor', 'preco' => 900],
    ['nome' => 'Headset', 'preco' => 200],
];

$arr = array_reduce($itens, function ($acumulador, $item) {
    return $acumulador + $item["preco"];
}, 0);

echo "Preço combinado de todos os itens: R$$arr $linha";

