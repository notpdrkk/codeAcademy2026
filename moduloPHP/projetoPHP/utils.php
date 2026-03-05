<?php
function mainMenu()
{
    limpaTela();
    echo "Seja bem vindo(a) ao Sistema!\n";
    echo "1 - Criar tarefa\n2 - Listar\n3 - Editar\n4 - Remover\n5 - Estatísticas\n6 - Cadastrar usuário\n7 - Deslogar\n8 - Sair\n";
    $escolha = readline("Escolha uma opção: ");

    switch ($escolha) {
        case 1:
            criarTarefa();
            break;
        case 2:
            listarTarefas();
            break;
        case 3:
            editarTarefa();
            break;
        case 4:
            removerTarefa();
            break;
        case 5:
            mostrarEstatisticas();
            break;
        case 6:
            cadastrarUsuario();
            break;
        case 7:
            echo "Deslogando";
            loginMenu();
        case 8:
            echo "Saindo do sistema!";
            exit(0);
            break;
        default:
            echo "Opção inválida!";
            readline("\nPressione Enter para voltar ao menu");
            mainMenu();
            break;
    }
}
function limpaTela()
{
    echo (PHP_OS_FAMILY == 'Windows') ? system('cls') : system('clear');
}
