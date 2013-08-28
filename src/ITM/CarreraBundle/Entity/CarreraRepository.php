<?php

namespace ITM\CarreraBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CarreraRepository extends EntityRepository
{
    public function findCarreras()
    {
    	$em = $this->getEntityManager();
    	$query =  $em->createQuery('SELECT c FROM CarreraBundle:Carrera c');
    	$query->setFirstResult(4);	
    	$query->setMaxResults(4);
       
        return $query->getResult();
    }
}