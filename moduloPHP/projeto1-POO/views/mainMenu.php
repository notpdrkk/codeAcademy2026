<?php

require_once "charSelector.php";
function mainMenu()
{
    echo "Seja muito bem-vindo(a) ao POO RPG Game\n";
    readline("Pressione qualquer tecla para selecionar um personagem");
    charSelector();
}
