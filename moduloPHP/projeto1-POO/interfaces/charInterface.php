<?php

interface combatInterface
{
    public function attack(Character $character);
    public function defend(Character $character);
    public function useSkill(Character $character);
    public function changeTurn(Character $character);
    public function decreaseHealth(Character $character, int $amount);
}
