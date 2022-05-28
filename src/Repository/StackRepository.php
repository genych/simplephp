<?php

namespace App\Repository;

use App\Entity\Stack;
use App\Service\StackService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Stack>
 *
 * @method Stack|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stack|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stack[]    findAll()
 * @method Stack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stack::class);
    }

    /**
     * @return Stack[]
     */
    public function list(): array
    {
        $dql = 'select s from App\Entity\Stack s
            order by s.id desc
        ';

        /** @var Stack[] $stack */
        $stack = $this->getEntityManager()
            ->createQuery($dql)
            ->getResult();

        return $stack;
    }

    /**
     * @param float $number
     * @return void
     * @throws \Throwable
     */
    public function push(float $number): void
    {
        $em = $this->getEntityManager();
        $x = new Stack($number);

        $cnt = $this->count([]);
        if ($cnt >= StackService::STACK_SIZE) {
            $first = $this->findBy([], ['id' => 'asc'], 1)[0] ?? null;
            if ($first) {
                $em->remove($first);
            }
        }
        $em->persist($x);
        $em->flush();
    }
}
