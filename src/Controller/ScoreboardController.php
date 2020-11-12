<?php

namespace NeueFische\Controller;

use NeueFische\Game\Scoreboard;

use NeueFische\Router\ControllerResponse;

class ScoreboardController
{
    public function get()
    {
        session_start();

        return new ControllerResponse(
            'scoreboard.html',
            ['latestGame' => $_SESSION['score']]
        );
    }
}
