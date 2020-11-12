<?php

namespace NeueFische\Controller;

require_once './bootstrap.php';

use NeueFische\Router\ControllerResponse;
use NeueFische\Entities\User;



class CreateUserController
{

    public function saveUser(): void
    {
        $newUser = new User();
        $newUser->setEmail($_POST['email']);
        $newUser->setPassword($_POST['password']);
        $doctrineEntityManager = getEntityManager();
        $doctrineEntityManager->persist($newUser);
        $doctrineEntityManager->flush();
        var_dump($doctrineEntityManager->getRepository(User::class)->find('id', 1));
    }




    public function get()
    {
        var_dump($_POST);
        $this->saveUser();
        return new ControllerResponse(
            'create-user.html',
            []
        );
    }
}

/*


$userArray = [];

$torsten = new User();
$torsten->setEmail('torsten@neuefische.de');
$torsten->setPassword('pokerface');
$userArray[] = $torsten;

$tine = new User();
$tine->setEmail("tine@neuefische.de");
$tine->setPassword("ich mag lieber python");
$userArray[] = $tine;

$marian = new User();
$marian->setEmail("marian@neuefische.de");
$marian->setPassword("backend zweifel");
$userArray[] = $marian;

$doctrineEntityManager = getEntityManager();

foreach($userArray as $user) {
    $doctrineEntityManager->persist($user);
}

$doctrineEntityManager->flush();

var_dump($doctrineEntityManager->getRepository(User::class)->findAll());

*/