<?php

class Combat
{

    private Character $player;

    public function combatMenu(Character $player)
    {
        global $player;

        $isActive = false;

        while (!$isActive) {
            echo "É a sua vez de atacar, " . $player->getName() . "!\n";
            echo "1 - Atacar\n2 - Defender\n3 - Usar Habilidade Especial\n";
            $choice = readline("Sua escolha: ");
        }
    }
}
