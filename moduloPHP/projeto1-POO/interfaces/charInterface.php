<?php

interface charInterface
{
    public function attack(Character $opponent);
    public function heal();
    public function useSkill_1(Character $opponent);
    public function useSkill_2(Character $opponent);
}
