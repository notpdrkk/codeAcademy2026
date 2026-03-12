<?php

class Warrior extends Character
{

    public function __construct($name)
    {
        echo "Criando warrior!\n";
        parent::__construct(
            name: $name ?? "Warrior",
            charClass: "Warrior",
            health: 100,
            defense: 8,
            atkDamage: 12,
            skill1: "Victory Rush",
            skill2: "Berserker Rage" 
        );
    }

    public function attack(Character $opponent)
    {
        $damage = $this->getAtkDamage() - $opponent->getDefense();
        $opponent->setHealth($opponent->getHealth() - $damage);

        echo "Warrior ataca com seu machado, causando dano de " . $this->getAtkDamage() . " pontos.\n";
        echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
    }

    public function defend(Character $opponent)
    {
        echo "Warrior se prepara para o ataque, aumentando sua defesa em " . $this->getDefense() . " pontos.\n";
    }

    public function useSkill1(Character $opponent)
    {
        return "Usando victory rush\n";
    }

    public function useSkills2 (Character $opponent){
        return "Usando berserker rage\n";
    }
}
