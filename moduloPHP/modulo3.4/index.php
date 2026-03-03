<?php

$linha = "\n--------------------------------\n";

echo "Exercicio 01 - Criando e exibindo arrays\n";

$array = ['maça', 'banana', 'laranja', 'uva', 'melancia'];

foreach ($array as $fruta):
    echo $fruta, "\n";
endforeach;

echo $linha;

//
echo "Exercicio 02 - Array associativo\n";

$array = [
    'pedro' => 21,
    'gustavo' => 19,
    'joão' => 24,
    'maria' => 26
];

foreach ($array as $nome => $idade):
    echo "nome: $nome | idade: $idade\n";
endforeach;

//
echo "Exercicio 03 - Adicionando elemento\n";

$cores = ['Vermelho', 'azul', 'verde'];

array_push($cores, 'amarelo');
array_unshift($cores, 'preto');

print_r($cores);
echo $linha;

//
echo "Exercicio 04 - Removendo elementos\n";

$numeros = [10,20,30,40,50];

array_pop($numeros);
array_shift($numeros);

print_r($numeros);
echo $linha;

//
echo "Exercicio 05 - Contando elementos\n";

$numeros = [21,34,7,4,-3,6,77,8];

echo "Esse array possui ", count($numeros), " elementos\n";

foreach ($numeros as $numero){
    if ($numero > 10){
        echo $numero , " é maior que 10\n";
    }
}

echo $linha;

//
echo "Exercicio 06 - Buscando valores\n";

$cidades = ['São Paulo', 'Rio de Janeiro', 'Curitiba', 'Belo Horizonte', 'Salvador'];

echo in_array('Curitiba', $cidades) ? "true\n" : "false\n";
echo "Curitiba está no índice: " , array_search('Curitiba', $cidades);
echo $linha;

//
echo "Exercicio 07 - Ordenação crescente e decrescente\n";

$notas = [7.5, 3.2, 9.8, 5.0, 8.1, 6.7];

sort($notas);
print_r($notas);

rsort($notas);
print_r($notas);

echo $linha;

//
echo "Exercicio 08 - Ordenação de array associativo\n";

$produtos = [
    'café' => 39.90,
    'leite' => 4.50,
    'duzia de ovos' => 19.90,
    'coca-cola 2L' => 10.99,
    'Doritos' => 200
];

asort($produtos);

foreach ($produtos as $nome => $preco):
    echo "produto: $nome | preço: $preco\n";
endforeach;

echo $linha;

//
echo "Exercicio 09 - Fatiando arrays (array_slice)\n";

$letras = ['A','B','C','D','E','F','G','H'];

print_r(array_slice($letras, 2, 4));
echo $linha;

//
echo "Exercicio 10 - Mesclando arrays\n";

$turmaA = ['Ana', 'Bruno', 'Carlos'];
$turmaB = ['Diana', 'Eduardo', 'Fernanda'];

print_r(array_merge($turmaA, $turmaB));
echo $linha;

//
echo "Exercicio 11 - Removendo duplicatas\n";

$tags = ['php', 'html', 'css', 'php', 'javascript', 'html', 'css', 'python'];

print_r(array_unique($tags));
print_r(array_values($tags));
echo $linha;

// 
echo "Exercicio 12 - Invertendo um array\n";

$fila = ['primeiro', 'segundo', 'terceiro', 'quarto', 'quinto'];
$fila2 = [];

print_r(array_reverse($fila));
echo $linha;

for ($i = count($fila)- 1; $i >= 0; $i--){
    $fila2[] = $fila[$i];
}

print_r($fila);
print_r($fila2);
