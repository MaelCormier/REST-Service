<?php
/**
 * Created by PhpStorm.
 * User: Miles
 * Date: 02/12/2017
 * Time: 20:07
 */

namespace OC\SearchBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use PagerFanta\Adapter\DoctrineORMAdapter;
use PagerFanta\Pagerfanta;

class AbstractRepository extends EntityRepository
{
    protected function paginate(QueryBuilder $qb, $limit = 25, $offset = 0)
    {
        if (0 == $limit || 0 == $offset) {
            throw new \LogicException('$limit & $offstet must be greater than 0.');
        }

        $pager = new Pagerfanta(new DoctrineORMAdapter($qb));
        $currentPage = ceil($offset + 1) / $limit;
        $pager->setCurrentPage($currentPage);
        $pager->setMaxPerPage((int) $limit);

        return $pager;
    }
}