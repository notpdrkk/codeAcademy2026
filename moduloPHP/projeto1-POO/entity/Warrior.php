<?php

class Warrior extends Character
{

    public function __construct()
    {
        echo "Criando warrior!\n";
        parent::__construct(
            id: 3,
            name: "Warrior",
            charClass: "Warrior",
            health: 180,
            defense: 90,
            atkDamage: 50,
            skills: null
        );
    }
}
