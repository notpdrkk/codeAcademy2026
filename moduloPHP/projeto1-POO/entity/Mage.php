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
            defense: 40,
            atkDamage: 20,
        );
    }

    public function attack($character)
    {
        $damage = $this->getAtkDamage() - $character->getDefense();
        $damage = max(0, $damage);
        $character->setHealth($character->getHealth() - $damage);
        echo "Mage conjura sua magia, causando dano de " . $this->getAtkDamage() . " pontos.\n";
    }

    public  function defend($character)
    {
        return null;
    }

    public function useSkill($character) {}

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
