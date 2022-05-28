<?php

namespace App\Entity;

use App\Repository\StackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StackRepository::class)]
class Stack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'float')]
    private float $number;

    public function __construct(float $number)
    {
        $this->number = $number;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNumber(): float
    {
        return $this->number;
    }

    public function setNumber(float $x): self
    {
        $this->number = $x;

        return $this;
    }
}
