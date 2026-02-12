<?php

$linha = "\n--------------------------------\n";

//
echo "Exercicio 01 - Verificação de maioridade\n";
$idade = 17;

if ($idade >= 18){
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
echo $linha;

//
echo "Exercicio 02 - Classificação de nota\n";
$nota = 7.5;

if ($nota >= 7){
    echo "Aprovado";
} elseif ($nota >= 5 && $nota < 7) {
    echo "Recuperacao";
} else {
    echo "Reprovado";
}
echo $linha;

//
echo "Exercicio 03 - Operador ternário - par ou impar\n";
$numero = 15;
$resultado = ($numero % 2 == 0 ? "Par" : "Impar");

echo $resultado;
echo $linha;

// 
echo "Exercicio 04 - Verificação de tipo com gettype()\n";
$x = 42; $y = "Olá"; $z = true;

if (gettype($x) == "integer") {
    echo "\nA variavel " . $x . " é do tipo integer";
} else if (gettype($x) == "string"){
    echo "\nA variavel " . $x . " é do tipo string";
} elseif (gettype($x) == "boolean"){
    echo "\nA variavel " . $x . " é do tipo boolean";
}

if (gettype($y) == "integer") {
    echo "\nA variavel " . $y . " é do tipo integer";
} else if (gettype($y) == "string"){
    echo "\nA variavel " . $y . " é do tipo string";
} elseif (gettype($y) == "boolean"){
    echo "\nA variavel " . $y . " é do tipo boolean";
}

if (gettype($z) == "integer") {
    echo "\nA variavel " . $z . " é do tipo integer";
} else if (gettype($z) == "string"){
    echo "\nA variavel " . $z . " é do tipo string";
} elseif (gettype($z) == "boolean"){
    echo "\nA variavel " . $z . " é do tipo boolean";
}

echo $linha;

// 
echo "Exercicio 05 - Dia da Semana com switch\n";

$dia = 3;

switch ($dia){
    default: {
        echo "Dia inválido";
        break;
    }
    case 1: {
        echo "Segunda-feira";
        break;
    }
    case 2: {
        echo "Terça-feira";
        break;
    }
    case 3: {
        echo "Quarta-feira";
        break;
    }
    case 4: {
        echo "Quinta-feira";
        break;
    }
    case 5: {
        echo "Sexta-feira";
        break;
    }
    case 6: {
        echo "Sábado";
        break;
    }
    case 7: {
        echo "Domingo";
        break;
    }
}
echo $linha;

//
echo "Exercicio 06 - Operadores de comparação\n";
$a = "10";
$b = 10;

if ($a == $b){
    echo "True, pois os VALORES são iguais";
} 

if ($a === $b){
    echo "";
} else {
    echo "\nFalse, pois os TIPOS são diferentes (string e int)";
}

echo $linha;

//
echo "Exercicio 07 - Classificação de IMC\n";

$peso = 75; $altura = 1.69;

if ($peso > 0 && $altura > 0){
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC: " . number_format($imc, 2);

    if ($imc < 18.5){
        echo "\nAbaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25){
        echo "\nPeso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "\nSobrepeso";
    } else {
        echo "\nObesidade";
    }

} else {
    echo "\nPeso ou altura inválidos";
}

echo $linha;

//
echo "Exercicio 08 - Operadores Lógicos - acesso ao sistema\n";
$usuario = "admin"; $senha = "1234";

if ($usuario == "admin" && $senha == "1234"){
    echo "Acesso permitido!";
} else {
    echo "Acesso negado";
}

echo $linha;

//
echo "Exercicio 09 - Operador de coalescência nula\n";
$nome = null;
$saudacao = $nome ?? "Visitante";

echo "Olá, " . $saudacao . "!";
echo $linha;

//
echo "Exercicio 10 - Desconto por faixa de preço\n";
$preco = 0;
$desconto = 0;
$precoFinal = 0;

echo "Preço original: R$" . $preco;

if ($preco > 0){
   
} else {
    echo "Valor inválido";
}

echo "\nDesconto: " . $desconto . "% \nPreço final: R$" . $precoFinal;
echo $linha;