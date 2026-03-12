<?php

class Mage extends Character
{
    public function __construct($name)
    {
        echo "Criando mago!\n";

        parent::__construct(
            name: $name ?? "Mage",
            charClass: "Mage",
            health: 60,
            defense: 2,
            atkDamage: 18,
            skill1: "Arcane shot",
            skill2: "Arcane Shield"
        );
    }

    public function attack(Character $opponent)
    {
        $damage = $this->getAtkDamage() - $opponent->getDefense();
        $opponent->setHealth($opponent->getHealth() - $damage);
        
        echo "Mage conjura sua magia, causando dano de " . $this->getAtkDamage() . " pontos.\n";
        echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
    }

    public function defend(Character $opponent)
    {
        echo "Mage se esquiva do ataque, reduzindo o dano recebido em " . $this->getDefense() . " pontos.\n";
        $this->setDefense($this->getDefense() * 2);
    }

    public function useSkill1(Character $opponent)
    {
        echo "usando arcane shot\n";
    }
    public function useSkill2(Character $opponent)
    {
        echo "usando arcane shield\n";
    }
}
