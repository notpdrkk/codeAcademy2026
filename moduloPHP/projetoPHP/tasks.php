<?php

require "index.php";

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
        echo "Tarefa: " .  $tarefa["descricao"] . " | Prazo: ", $tarefa["prazo"] .  " | Concluida: ";
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

    foreach ($tarefas as $tarefa) {
        if ($busca == $tarefa["id"]) {
            echo "\nId: " . $tarefa["id"];
            echo "\nDescrição: " . $tarefa["descricao"];
            echo "\nPrioridade: " . $tarefa["prioridade"];
            echo "\nPrazo: " . $tarefa["prazo"];
            echo "\nConcluida: " . ($tarefa["concluida"] ? "true" : "false");
            echo "\n";
            $encontrada = $tarefa;
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

    $tarefa = buscarTarefa();

    if ($tarefa === null) return;

    // Encontrar o índice da tarefa
    $index = null;
    foreach ($tarefas as $i => $t) {
        if ($t["id"] === $tarefa["id"]) {
            $index = $i;
            break;
        }
    }

    echo "\nStatus atual: " . ($tarefa["concluida"] ? "true" : "false") . "\n";
    echo "1 - Marcar como concluída\n2 - Marcar como pendente\n3 - Voltar ao menu\n";
    $escolha = readline("Sua escolha: ");

    $status = match ($escolha) {
        '1' => $tarefa["concluida"] = true,
        '2' => $tarefa["concluida"] = false,
        '3' => mainMenu(),
    };

    if ($escolha === '1') {
        echo "Tarefa marcada como concluída!\n";
    } elseif ($escolha === '2') {
        echo "Tarefa marcada como pendente!\n";
    } elseif ($escolha === '3') {
        return;
    } else {
        echo "Opção inválida!\n";
    }

    readline("\nPressione Enter para voltar ao menu");
    mainMenu();
}
function removerTarefa()
{
    global $tarefas;
    limpaTela();

    $tarefa = buscarTarefa();
    
    if ($tarefa === null) return;

    echo "\nDeseja remover a tarefa?";
    echo "\n1 - Sim\n2 - Não\n";
    $escolha = readline("Sua escolha: ");

    if ($escolha == 1) {
        unset($tarefas[$tarefa['id'] - 1]);
        var_dump($tarefas);
    }

    $tarefas = array_values($tarefas);
    echo "Tarefa removida!\n";

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
