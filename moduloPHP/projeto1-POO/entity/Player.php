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

    public function getTurn()
    {
        return $this->turn;
    }

    public function setTurn($turn)
    {
        $this->turn = $turn;
    }

    public function getChar(): Character
    {
        return $this->char;
    }

    public function setChar($char)
    {
        $this->char = $char;
    }
}
