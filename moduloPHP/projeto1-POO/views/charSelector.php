<?php

require_once "./utils/utils.php";

function charSelector()
{
    clearScreen();
    $char = null;

    line();
    echo "Escolha seu personagem: \n";
    echo "[1] - Combat Rogue - Ladino ágil com ataques com veneno e habilidade com dano alto.\n";
    echo "[2] - Bruiser Warrior - Guerreiro com resistência alta e dano físico médio.\n";
    echo "[3] - Arcane Mage - Mago frágil com baixo HP mas habilidades mágicas poderosas. \n";

    $choice = readline("Sua escolha: ");

    clearScreen();

    $name = readline("Digite o nome do seu personagem: ");

    try {
        switch ($choice) {
            case 1:
                $char = new Rogue($name);
                break;
            case 2:
                $char = new Warrior($name);
                break;
            case 3:
                $char = new Mage($name);
                break;
            default:
                echo "Opção inválida!\n";
                readline("Pressione ENTER para escolher novamente");
                return charSelector();
        }
    } catch (InvalidArgumentException $e) {
        echo "Ocorreu um erro: " . $e->getMessage() . "\n";
        readline("Pressione ENTER para escolher novamente");
        return charSelector();
    }
    return $char;
}
