<?php 

require_once './vendor/autoload.php';

use NeueFische\Game\ConsoleHangmanGame;

$game = new ConsoleHangmanGame("verwirrung ist gross und input ist viel", 10);
$game->start();