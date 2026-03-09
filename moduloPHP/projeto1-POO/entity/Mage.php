<?php

class Mage extends Character
{
    public function __construct()
    {
        parent::__construct(
            name: "Mage",
            charClass: "Mage",
            health: 100,
            defense: 50,
            atkDamage: 40,
            skills: null
        );
    }
}
