<?php

class Player
{
    private $name;

    private $turn;

    private Character $char;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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
