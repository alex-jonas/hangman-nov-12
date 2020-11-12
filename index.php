<?php

require_once './vendor/autoload.php';

use NeueFische\Router\Router;
use NeueFische\Controller\HomeController;
use NeueFische\Controller\ScoreboardController;
use NeueFische\Controller\RegistrationController;
use NeueFische\Controller\CreateUserController;

$router = new Router(
    [
        // Request URL => Destination Controller Class
        "/" => HomeController::class,
        "/scoreboard" => ScoreboardController::class,
        // "/register" => NeueFische\Controller\RegistrationController,
        "/register" => RegistrationController::class,
        // NOGO, no clean code, no Find All References
        "/registerString" => "NeueFische\Controller\RegistrationController",
        "/create-user" => CreateUserController::class,
    ]
);

$router->route($_SERVER['REQUEST_URI']);
