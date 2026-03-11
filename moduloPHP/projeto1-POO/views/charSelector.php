<?php

require_once "./utils/utils.php";

function charSelector()
{
    $char = null;

    echo "Escolha seu personagem: \n";
    echo "1 - Rogue\n2 - Warrior\n3 - Mage\n";
    $choice = readline("Sua escolha: ");

    switch ($choice) {
        case 1:
            $char = new Rogue();
            break;
        case 2:
            $char = new Warrior();
            break;
        case 3:
            $char = new Mage();
            break;
        default:
            echo "Opção inválida!\n";
            readline("Pressione ENTER para escolher novamente");
            charSelector();
            break;
    }
    return $char;
}
