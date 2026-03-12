<?php

class Warrior extends Character
{

    public function __construct($name)
    {
        parent::__construct(
            name: $name ?? "Warrior",
            charClass: "Warrior",
            health: 100,
            defense: 8,
            atkDamage: 12,
            skill1: "Victory Rush",
            skill2: "Berserker Rage",
            heal: true
        );
    }

    public function attack(Character $opponent)
    {
        $damage = $this->getAtkDamage() - $opponent->getDefense();
        $opponent->setHealth($opponent->getHealth() - $damage);

        echo "Warrior ataca com seu machado, causando dano de " . $this->getAtkDamage() . " pontos.\n";
        echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
    }

    public function heal()
    {
        if ($this->hasHeal()) {
            echo "Usando poção de cura, " . $this->getName() . " recupera 20 pontos de vida.\n";
            $this->setHealth($this->getHealth() + 20);
            echo $this->getName() . " agora tem " . $this->getHealth() . " pontos de vida\n";
            $this->setHeal(false);
        } else {
            throw new Exception("Você já usou sua poção de cura!");
        }
    }

    public function useSkill_1(Character $opponent)
    {
        echo "Warrior usa Victory Rush, causando dano de " . ($this->getAtkDamage() + 5) . " pontos e recuperando 10 pontos de vida.\n";
        $opponent->setHealth($opponent->getHealth() - ($this->getAtkDamage() + 5));
        $this->setHealth($this->getHealth() + 10);
        echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
        echo $this->getName() . " agora tem " . $this->getHealth() . " pontos de vida\n";
    }

    public function useSkill_2(Character $opponent)
    {
        echo "Warrior usa Berserker Rage, aumentando seu ataque em 5 pontos por 3 turnos.\n";
        $this->setAtkDamage($this->getAtkDamage() + 5);
    }
}
