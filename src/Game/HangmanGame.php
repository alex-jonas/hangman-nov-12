<?php

namespace NeueFische\Game;

use NeueFische\Game\Scoreboard;

class HangmanGame
{

    // $board = new Scoreboard();
    // $board->getScor()
    protected $secretWord;
    protected $maxGuesses;

    protected $availableGuesses;
    protected $foundWord;

    public function __construct(string $secretWord, int $maxGuesses)
    {
        $this->secretWord = $secretWord;
        $this->maxGuesses = $maxGuesses;

        $this->availableGuesses = $maxGuesses;
        $this->foundWord = str_repeat('_ ', strlen($this->secretWord));
    }

    public function newGuess(string $character)
    {
        if ($this->availableGuesses <= 0) {
            // Verloren -> 
            echo "GAME OVER.";
        } else {
            $this->setWord($character);
        }

        $this->availableGuesses--;
    }

    public function getWord(): string
    {
        return $this->foundWord;
    }

    public function isFinished(): bool
    {
        return $this->availableGuesses <= 0;
    }

    public function isWon(): bool
    {
        if ($this->isFinished()) {
            return true;
        }
    }

    private function setWord(string $character): void
    {
        for ($i = 0; $i < strlen($this->secretWord); $i++) {
            if ($this->secretWord[$i] === $character) {
                $this->foundWord[$i * 2] = $character;
            }
        }
    }

    public function setFoundWord(string $word): void
    {
        $this->foundWord = $word;
    }

    public function setAvailableGuesses(int $guesses): void
    {
        $this->availableGuesses = $guesses;
    }

    public function getAvailableGuesses(): int
    {
        return $this->availableGuesses;
    }
}
