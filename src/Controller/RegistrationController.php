<?php 

namespace NeueFische\Controller;

use NeueFische\Router\ControllerResponse;

class RegistrationController {
    public function get() {
        return new ControllerResponse(
            'registration.html',
            []
        );
    }
}