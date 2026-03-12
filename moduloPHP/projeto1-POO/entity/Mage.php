<?php

class Mage extends Character
{
    public function __construct($name)
    {
        parent::__construct(
            name: $name ?? "Mage",
            charClass: "Mage",
            health: 60,
            defense: 2,
            atkDamage: 18,
            skill1: "Arcane shot",
            skill2: "Arcane Shield",
            heal: true
        );
    }

    public function attack(Character $opponent)
    {
        $damage = $this->getAtkDamage() - $opponent->getDefense();
        $opponent->setHealth($opponent->getHealth() - $damage);

        echo $this->getName() . " conjura sua magia, causando dano de " . $this->getAtkDamage() . " pontos.\n";
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
        echo "usando arcane shot\n";
    }
    public function useSkill_2(Character $opponent)
    {
        echo "usando arcane shield\n";
    }
}
