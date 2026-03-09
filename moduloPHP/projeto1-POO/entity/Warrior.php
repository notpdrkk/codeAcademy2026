<?php

class Warrior extends Character
{

    public function __construct()
    {
        parent::__construct(
            name: "Warrior",
            charClass: "Warrior",
            health: 180,
            defense: 90,
            atkDamage: 50,
            skills: null
        );
    }
}
