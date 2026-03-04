<?php

$usuarios = [
    [
        "email" => "admin",
        "senha" => "1",
        "cargo" => "admin"
    ]
];

$tarefas = [
    [
        "id" => 1,
        "descricao" => "Terminar feature",
        "prioridade" => "alta",
        "prazo" => "7 dias",
        "concluida" => false
    ],
];

$ehLogado = false;

function loginMenu()
{
    global $usuarios, $ehLogado;

    limpaTela();

    echo "Por favor, realize o login!\n";
    $email = readline("Email: ");
    $senha = readline("Senha: ");
    $usuarioEncontrado = false;

    foreach ($usuarios as $usuario) {

        if ($email == $usuario['email'] && $senha == $usuario['senha']) {
            echo "Login realizado!\n";
            $usuarioEncontrado = true;
            mainMenu();
        }
    }

    if (!$usuarioEncontrado) {
        echo "Tente novamente\n";
        loginMenu();
    }
}

function mainMenu()
{
    limpaTela();
    echo "Seja bem vindo(a) ao Sistema!\n";
    echo "1 - Criar tarefa\n2 - Listar\n3 - Buscar\n4 - Editar\n5 - Remover\n6 - Estatísticas\n7 - Cadastrar usuário\n8 - Deslogar\n";
    $escolha = readline("Escolha uma opção: ");

    switch ($escolha) {

        case "1":
            criarTarefa();
            break;

        case 2:
            listarTarefas();
            break;

        case 3:
            buscarTarefa();
            break;

        case 4:
            editarTarefa();
            break;

        case 5:
            removerTarefa();
            break;

        case 6:
            mostrarEstatisticas();
            break;

        case 7:
            cadastrarUsuario();
            break;

        case 8:
            echo "Deslogando";

            loginMenu();
            break;

        default:
            echo "Opção inválida!";
            mainMenu();
            break;
    }
}

function criarTarefa()
{
    global $tarefas;

    limpaTela();

    echo "Criação de tarefas: \n";

    $id = 1;

    foreach ($tarefas as $tarefa) {
        if ($tarefa["id"] === $id) {
            $id += 1;
        }
    }

    $descTarefa = readline("Insira uma descrição: ");
    $prioridadeTarefa = readline("Insira uma prioridade: ");
    $prazoTarefa = readline("Insira um prazo (em dias): ");
    $estaConcluida = false;
    $tarefas[] = [
        "id" => $id,
        "descricao" => $descTarefa,
        "prioridade" => $prioridadeTarefa,
        "prazo" => $prazoTarefa,
        "concluida" => $estaConcluida
    ];

    echo "Deseja criar outra tarefa?\n1 - Sim\n2 - Não\n";
    $escolha = readline("Sua escolha: ");

    echo ($escolha == 1) ? criarTarefa() : mainMenu();
}

function listarTarefas()
{
    global $tarefas;

    limpaTela();

    foreach ($tarefas as $tarefa) {
        echo "Tarefa: ", $tarefa["descricao"], " | ", "Prazo: ", $tarefa["prazo"], "\n";
        echo "---------------------------------------\n";
    }

    echo "1 - Voltar ao menu\n2 - Sair do sistema\n";
    $escolha = readline("Sua escolha: ");

    switch ($escolha) {
        case 1: {
                mainMenu();
                break;
            }
        case 2: {
                loginMenu();
                break;
            }
        default: {
                echo "Opção inválida";
                listarTarefas();
            }
    }
}

function buscarTarefa()
{
    global $tarefas;

    limpaTela();

    $busca = readline("Procure uma tarefa pelo id: ");

    foreach ($tarefas as $tarefa => $valor) {
        if ($busca == $valor['id']) {
            echo "\nId: " . $valor["id"];
            echo "\nDescrição: " . $valor["descricao"];
            echo "\nPrioridade: " . $valor["prioridade"];
            echo "\nPrazo: " . $valor["prazo"];
            echo "\nConcluida: " . $valor["concluida"];
            echo "\n";
        }
        return ['index' => $tarefa, 'valor' => $valor];
    }
}
function editarTarefa()
{
    global $tarefas;

    limpaTela();

    $busca = buscarTarefa();

    $index = $busca['index'];

}
function removerTarefa()
{
    global $tarefas;

    limpaTela();

    $busca = buscarTarefa();

    $index = $busca['index'];
    unset($tarefas[$index]);

    array_values($tarefas);
    print_r($busca);
    mainMenu();
}

function mostrarEstatisticas()
{
    echo "estatisticas";
}

function cadastrarUsuario()
{
    global $usuarios;

    $novoNome = readline("Digite seu nome: ");
    $novoEmail = readline("Digite seu email: ");
    $novaSenha = readline("Digite sua senha: ");

    $usuarios[] = ["nome" => $novoNome, "email" => $novoEmail, "senha" => $novaSenha];
    echo "Usuário cadastrado com sucesso!\n";
    mainMenu();
}

function limpaTela()
{
    echo (PHP_OS_FAMILY == 'Windows') ? system('cls') : system('clear');
}
