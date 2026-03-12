<?php

class Rogue extends Character
{
    public function __construct($name)
    {
        echo "Criando rogue!\n";
        parent::__construct(
            name: $name ?? "Rogue",
            charClass: "Rogue",
            health: 80,
            defense: 4,
            atkDamage: 15,
            skill1: "Backstab",
            skill2: "Instant poison"
        );
    }

    public function attack(Character $opponent)
    {
        $damage = $this->getAtkDamage() - $opponent->getDefense();
        $opponent->setHealth($opponent->getHealth() - $damage);
        
        echo "Rogue ataca com sua adaga, causando dano de " . $this->getAtkDamage() . " pontos.\n";
        echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
    }

    public function defend(Character $opponent)
    {
        echo "Rogue se esquiva do ataque, reduzindo o dano recebido em " . $this->getDefense() . " pontos.\n";
        $this->setDefense($this->getDefense() * 2);
    }

    public function useSkill(Character $opponent)
    {
        return parent::useSkill($opponent);
    }
}
