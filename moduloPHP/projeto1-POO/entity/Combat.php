<?php

class Combat
{

    private Character $player;

    public function Menu(Character $player)
    {
        global $player;
        echo "É a sua vez de atacar, " . $player->getName() . "!\n";
        echo "1 - Atacar\n2 - Defender\n3 - Usar Habilidade Especial\n";
        $choice = readline("Sua escolha: ");
        return $choice;
    }
    
}
