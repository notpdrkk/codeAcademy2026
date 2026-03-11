<?php

require_once "interfaces/combatInterface.php";

abstract class Character implements combatInterface
{

    private $id;

    private $name;
    private $charClass;
    private $health;
    private $defense;
    private $atkDamage;

    private $skills;

    public function __construct($id, $name, $charClass, $health, $defense, $atkDamage, $skills)
    {
        $this->id = $id;
        $this->name = $name;
        $this->charClass = $charClass;
        $this->health = $health;
        $this->defense = $defense;
        $this->atkDamage = $atkDamage;
        $this->skills = $skills;
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

    public function getSkills(){
        return $this->skills;
    }

    public function setSkills($skills){
        $this->skills = $skills;
    }

    public function attack(Character $character)
    {
        return null;
    }

    public  function defend(Character $character)
    {
        return null;
    }

    public function useSkill(Character $character)
    {
        return null;
    }

    public function changeTurn(Character $character)
    {
        return null;
    }
}
