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
        "descricao" => "Terminar feature",
        "prioridade" => "alta",
        "prazo" => "7 dias",
        "concluida" => false
    ]
];

function loginMenu()
{
    global $usuarios;

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
    echo "Seja bem vindo(a) ao Sistema!\n";
    echo "1 - Criar tarefa\n2 - Listar\n3 - Buscar\n4 - Editar\n5 - Remover\n6 - Estatísticas\n7 - Cadastrar usuário (somente admin)\n8 - Deslogar\n";
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

    echo "Criação de tarefas: \n";

    $descTarefa = readline("Insira uma descrição: ");
    $prioridadeTarefa = readline("Insira uma prioridade: ");
    $prazoTarefa = readline("Insira um prazo (em dias): ");
    $estaConcluida = false;

    $tarefas[] = ["descricao" => $descTarefa, "prioridade" => $prioridadeTarefa, "prazo" => $prazoTarefa, "concluida" => $estaConcluida];

    $escolha = readline("Deseja criar outra tarefa?\n1 - Sim\n2 - Não");
    echo ($escolha == 1) ? criarTarefa() : mainMenu();
}

function listarTarefas()
{
    global $tarefas;

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
    echo "buscando tarefa";
}
function editarTarefa()
{
    echo "editando tarefa";
}
function removerTarefa()
{
    echo "removendo tarefa";
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
