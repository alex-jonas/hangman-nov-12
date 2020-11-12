<?php

namespace NeueFische\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $secretWord;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $foundWord;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $availableGuesses;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $maxGuesses;
}
