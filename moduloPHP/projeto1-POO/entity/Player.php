<?php


class Player
{
    private $turn;
    private Character $char;
    public function __construct($turn, Character $char)
    {
        $this->turn = $turn;
        $this->char = $char;
    }

    public function getChar(): Character
    {
        return $this->char;
    }
}
