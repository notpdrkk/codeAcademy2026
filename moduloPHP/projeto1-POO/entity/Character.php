<?php

require_once "interfaces/charInterface.php";

abstract class Character implements charInterface
{
    private $name;
    private $charClass;
    private $health;
    private $defense;
    private $atkDamage;
    private $skill1;
    private $skill2;

    private $heal = true;

    public function __construct($name, $charClass, $health, $defense, $atkDamage, $skill1, $skill2, $heal)
    {
        $this->name = $name;
        $this->charClass = $charClass;
        $this->health = $health;
        $this->defense = $defense;
        $this->atkDamage = $atkDamage;
        $this->skill1 = $skill1;
        $this->skill2 = $skill2;
        $this->heal = $heal;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCharClass($charClass)
    {
        return $this->charClass;
    }

    public function setCharClass($charClass)
    {
        $this->charClass = $charClass;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function getDefense()
    {
        return $this->defense;
    }

    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    public function getAtkDamage()
    {
        return $this->atkDamage;
    }

    public function setAtkDamage($atkDamage)
    {
        $this->atkDamage = $atkDamage;
    }

    public function getSkill_1()
    {
        return $this->skill1;
    }

    public function setSkill_1($skill1)
    {
        $this->skill1 = $skill1;
    }

    public function getSkill_2()
    {
        return $this->skill2;
    }

    public function setSkill_2($skill2)
    {
        $this->skill2 = $skill2;
    }

    public function hasHeal()
    {
        return $this->heal;
    }

    public function setHeal($heal)
    {
        $this->heal = $heal;
    }

    public function attack(Character $character)
    {
        return null;
    }

    public  function defend(Character $character)
    {
        return null;
    }

    public function useSkill_1(Character $character)
    {
        return null;
    }

    public function useSkill_2(Character $character)
    {
        return null;
    }
}
