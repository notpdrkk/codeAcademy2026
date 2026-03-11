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
            health: 110,
            defense: 50,
            atkDamage: 40,
        );
    }

    public function attack($character)
    {
        $damage = $this->getAtkDamage() - $character->getDefense();
        $damage = max(0, $damage);
        $character->setHealth($character->getHealth() - $damage);
        echo "Rogue ataca com uma adaga, causando dano de " . $this->getAtkDamage() . " pontos.\n";
    }

    public function defend($character)
    {
        echo "Rogue se esquiva do ataque, reduzindo o dano recebido em " . $this->getDefense() . " pontos.\n";
    }

    public function useSkill($character)
    {
        return parent::useSkill($character);
    }

    public function changeTurn($character)
    {
        throw new \Exception('Not implemented');
    }

    public function decreaseHealth(Character $character, int $amount)
    {
        $newHealth = $character->getHealth() - $amount;
        $character->setHealth(max(0, $newHealth));
        return $character->getHealth();
    }
}
