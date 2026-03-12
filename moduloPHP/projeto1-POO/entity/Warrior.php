<?php

class Warrior extends Character
{

    public function __construct($name)
    {
        parent::__construct(
            name: $name ?? "Warrior",
            charClass: "Warrior",
            health: 100,
            mana: 100,
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

        system('clear');

        echo $this->getName() . " ataca com seu machado, causando dano de $damage pontos.\n";
        echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
    }

    public function heal()
    {
        system('clear');
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
        system('clear');

        if ($this->getMana() >= 40) {
            echo "Warrior usa Victory Rush, causando dano de " . ($this->getAtkDamage() + 5) . " pontos e recuperando 10 pontos de vida.\n";
            $opponent->setHealth($opponent->getHealth() - ($this->getAtkDamage() + 5));
            $this->setHealth($this->getHealth() + 10);
            echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
            echo $this->getName() . " agora tem " . $this->getHealth() . " pontos de vida\n";
            $this->setMana($this->getMana() - 40);
        } else {
            throw new Exception("Mana insuficiente!\n");
        }
        echo $this->getName() . " tem " . $this->getMana() . " pontos de mana restantes.\n";
    }

    public function useSkill_2(Character $opponent)
    {
        system('clear');

        echo $this->getName() . " usa Berserker Rage, aumentando seu ataque em 5 pontos por 3 turnos.\n";

        $this->setAtkDamage($this->getAtkDamage() + 5);
    }
}
