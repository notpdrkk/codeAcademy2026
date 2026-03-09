<?php

function charSelector()
{
    echo "1 - Rogue\n2 - Warrior\n3 - Mage\n";
    $escolha = readline("Sua escolha: ");

    switch ($escolha) {
        case 1:
            $char1 = new Rogue();
            break;
        case 2:
            $char1 = new Warrior();
            break;
        case 3:
            $char1 = new Mage();
            break;
        default:
            echo "Opção inválida!\n";
            readline("Pressione enter para escolher novamente");
            charSelector();
            break;
    }

}
