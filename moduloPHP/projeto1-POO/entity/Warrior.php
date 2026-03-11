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
            health: 120,
            defense: 70,
            atkDamage: 30,
        );
    }

    public function attack($character)
    {
        $damage = $this->getAtkDamage() - $character->getDefense();
        $damage = max(0, $damage);
        $character->setHealth($character->getHealth() - $damage);
        echo "Warrior ataca com seu machado, causando dano de " . $this->getAtkDamage() . " pontos.\n";
    }

    public function defend($character)
    {
        return parent::defend($character);
    }

    public function useSkill($character)
    {
        return parent::useSkill($character);
    }

    public function changeTurn($character)
    {
        return null;
    }

    public function decreaseHealth(Character $character, int $amount)
    {
        $newHealth = $character->getHealth() - $amount;
        $character->setHealth(max(0, $newHealth));
        return $character->getHealth();
    }
}
