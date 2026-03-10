<?php

class Mage extends Character
{
    public function __construct()
    {
        echo "Criando mago!\n";

        parent::__construct(
            id: 1,
            name: "Mage",
            charClass: "Mage",
            health: 100,
            defense: 50,
            atkDamage: 40,
            skills: null
        );
    }
}
