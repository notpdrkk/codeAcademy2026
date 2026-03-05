<?php

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
        echo "Tarefa: ", $tarefa["descricao"], " | Prazo: ", $tarefa["prazo"], " | Concluida: ";
        echo ($tarefa["concluida"] ? "true" : "false");
        echo "\n---------------------------------------\n";
    }

    readline("\nPressione Enter para voltar ao menu");
    mainMenu();
}
function buscarTarefa()
{
    global $tarefas;
    limpaTela();

    $encontrada = false;
    $busca = readline("Procure uma tarefa pelo id: ");

    foreach ($tarefas as $index => $valor) {
        if ($busca == $valor['id']) {
            echo "\nId: " . $valor["id"];
            echo "\nDescrição: " . $valor["descricao"];
            echo "\nPrioridade: " . $valor["prioridade"];
            echo "\nPrazo: " . $valor["prazo"];
            echo "\nConcluida: " . ($valor["concluida"] ? "true" : "false");
            echo "\n";
            $encontrada = ['index' => $valor['id'], 'valor' => $valor];
            break;
        }
    }

    if (!$encontrada) {
        echo "Nenhuma tarefa encontrada!\n";
        readline("\nPressione Enter para voltar ao menu");
        mainMenu();
        return null;
    }

    return $encontrada;
}

function editarTarefa()
{
    global $tarefas;

    limpaTela();

    $encontrada = false;
    $busca = readline("Procure uma tarefa pelo id: ");

    foreach ($tarefas as $index => $valor) {
        if ($busca == $valor['id']) {
            $encontrada = ['index' => $index, 'valor' => $valor];
            break;
        }
    }

    if (!$encontrada) {
        echo "Nenhuma tarefa encontrada!\n";
        readline("\nPressione Enter para voltar ao menu");
        mainMenu();
        return;
    }

    $index = $encontrada['index'];
    $tarefa = $encontrada['valor'];

    echo "\nStatus atual: " . ($tarefa["concluida"] ? "true" : "false") . "\n";
    echo "1 - Marcar como concluída\n2 - Marcar como pendente\n3 - Voltar ao menu\n";
    $escolha = readline("Sua escolha: ");

    switch ($escolha) {
        case 1:
            $tarefas[$index]["concluida"] = true;
            echo "Tarefa marcada como concluída!\n";
            break;
        case 2:
            $tarefas[$index]["concluida"] = false;
            echo "Tarefa marcada como pendente!\n";
            break;
        case 3:
            mainMenu();
            return;
        default:
            echo "Opção inválida!\n";
    }

    readline("\nPressione Enter para voltar ao menu");
    mainMenu();
}
function removerTarefa()
{
    global $tarefas;
    limpaTela();

    $busca = buscarTarefa();
    if ($busca === null) return;

    echo "\n Deseja remover a tarefa \"" . $busca['valor']['descricao'] . "\"?\n";
    echo "1 - Sim\n2 - Não\n";
    $escolha = readline("Sua escolha: ");

    if ($escolha == 1) {
        foreach ($tarefas as $index => $tarefa) {
            if ($tarefa['id'] == $busca['index']) {
                unset($tarefas[$index]);
                break;
            }
        }
        $tarefas = array_values($tarefas);
        echo "Tarefa removida!\n";
    }

    readline("\nPressione Enter para voltar ao menu");
    mainMenu();
}

function mostrarEstatisticas()
{
    global $tarefas;

    limpaTela();

    $total = count($tarefas);
    $concluidas = count(array_filter($tarefas, fn($item) => $item["concluida"]));
    $pendentes = $total - $concluidas;

    echo "Total: $total | Concluídas: $concluidas | Pendentes: $pendentes\n";

    readline("\nPressione Enter para voltar ao menu");
    mainMenu();
}
