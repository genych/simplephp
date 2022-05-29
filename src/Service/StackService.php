<?php declare(strict_types=1);

namespace App\Service;

use App\Entity\Stack;
use App\Repository\StackRepository;

class StackService
{
    public const STACK_SIZE = 5; // it can grow but won't shrink automatically

    public function __construct(
        private readonly StackRepository $stackRepository,
    ) { }

//todo: handle errors maybe
    /**
     * @param float $number
     * @return void
     * @throws \Throwable
     */
    public function push(float $number): void
    {
        $this->stackRepository->push($number);
    }

    /**
     * @return float[]
     */
    public function list(): array
    {
        $stack = $this->stackRepository->list();
        return array_map(fn(Stack $x): float => $x->getNumber(), $stack);
    }
}
