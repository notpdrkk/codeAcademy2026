<?php

class Rogue extends Character
{
    public function __construct()
    {
        echo "Criando rogue!\n";
        parent::__construct(
            id: 2,
            name: "Rogue",
            charClass: "Rogue",
            health: 150,
            defense: 80,
            atkDamage: 30,
            skills: null
        );
    }

    public function showClassDetails()
    {
        echo "Os Rogues têm proficiência com kits de veneno, podendo aplicar venenos em armas para causar dano extra.\n";
    }

    public function attack()
    {
        echo "Rogue ataca com uma adaga, causando dano de " . $this->getAtkDamage() . " pontos.\n";
    }

}
