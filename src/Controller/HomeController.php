<?php

namespace NeueFische\Controller;

use NeueFische\Router\ControllerResponse;

class HomeController
{

    public function get()
    {
        session_start();

        $game = new \NeueFische\Game\HangmanGame("zeitdruck", 10);

        if (array_key_exists('foundWord', $_SESSION)) {
            $game->setFoundWord($_SESSION['foundWord']);
            $game->setAvailableGuesses($_SESSION['guesses']);
        }

        if (array_key_exists('character', $_POST)) {
            $game->newGuess($_POST['character']);
            $_SESSION['foundWord'] = $game->getWord();
            $_SESSION['guesses'] = $game->getAvailableGuesses();

            if ($game->isFinished()) {
                $_SESSION['latestGame'] = $game->isWon();
                $_SESSION['score'] += $game->isWon() ? 1 : -1;
            }
        }

        return new ControllerResponse(
            'home.html',
            [
                'hangmanGameData' => $game,
                'additionaData' => "Alex HEadline"
            ]
        );
    }
}
