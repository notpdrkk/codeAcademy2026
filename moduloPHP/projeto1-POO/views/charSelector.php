<?php

require_once "./utils/utils.php";

function charSelector()
{
    system('clear');
    $char = null;

    line();
    echo "Escolha seu personagem: \n";
    echo "[1] - Combat Rogue - Ladino ágil com ataques com veneno e habilidade com dano alto.\n";
    echo "[2] - Bruiser Warrior - Guerreiro com resistência alta e dano físico médio.\n";
    echo "[3] - Arcane Mage - Mago frágil com baixo HP mas habilidades mágicas poderosas. \n";

    $choice = readline("Sua escolha: ");

    system('clear');

    $name = readline("Digite o nome do seu personagem: ");

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
            charSelector();
            break;
    }
    return $char;
}
