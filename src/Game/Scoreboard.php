<?php

namespace NeueFische\Game;

class Scoreboard
{
    private $score;

    public function __construct($score = 0)
    {
        $this->score = $score;
    }

    public function addWin(): int
    {
        $this->score++;
        return $this->score;
    }

    public function addLoss(): int
    {
        $this->score--;
        return $this->score;
    }

    public function getScore()
    {
        return $this->score;
    }
}
