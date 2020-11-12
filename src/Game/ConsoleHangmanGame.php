<?php 

namespace NeueFische\Game;

class ConsoleHangmanGame extends HangmanGame {
    public function start(): void {
        echo $this->getWord() . "\n";

        while($this->availableGuesses > 0) {
            $guess = readline("Guess your character: ");
            $this->newGuess($guess);
        }
    }
    
    public function newGuess(string $character) {
        parent::newGuess($character);

        echo 'Available guesses ' . $this->availableGuesses . "\n";
        echo $this->getWord() . "\n";
    }
}
