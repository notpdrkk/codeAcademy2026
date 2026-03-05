<?php

class Mage extends Character
{

    
    public function __construct($name, $charClass, $health, $defense, $atkDamage, $skills)
    {
        return parent::__construct($name, $charClass, $health, $defense, $atkDamage, $skills);
    }
}
