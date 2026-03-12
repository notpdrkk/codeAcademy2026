<?php

interface charInterface
{
    public function attack(Character $opponent);
    public function defend(Character $opponent);
    public function useSkill(Character $opponent);
}
