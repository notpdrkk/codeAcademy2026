<?php

class Rogue extends Character
{
    public function __construct($name)
    {
        parent::__construct(
            name: $name ?? "Rogue",
            charClass: "Rogue",
            health: 80,
            mana: 100,
            defense: 4,
            atkDamage: 15,
            skill1: "Backstab",
            skill2: "Instant poison",
            heal: true,
        );
    }

    public function attack(Character $opponent)
    {
        $damage = $this->getAtkDamage() - $opponent->getDefense();
        $opponent->setHealth($opponent->getHealth() - $damage);

        system('clear');

        echo $this->getName() . " ataca com sua adaga, causando dano de $damage pontos.\n";
        echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
    }

    public function heal()
    {
        if ($this->hasHeal()) {
            system('clear');
            
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

        if ($this->getMana() >= 45) {
            echo $this->getName() . " usa Backstab, causando dano crítico de " . ($this->getAtkDamage() * 2) . " pontos.\n";
            $opponent->setHealth($opponent->getHealth() - ($this->getAtkDamage() * 2));
            echo $opponent->getName() . " tem " . $opponent->getHealth() . " pontos de vida restantes.\n";
            $this->setMana($this->getMana() - 45);
        } else {
            throw new Exception("Mana insuficiente!\n");
        }
        
        echo $this->getName() . " tem " . $this->getMana() . " pontos de mana restantes.\n";
    }

    public function useSkill_2(Character $opponent)
    {
        system('clear');
        echo $this->getName() . " usa Instant Poison, envenenando o oponente e causando dano ao longo do tempo.\n";
    }
}
