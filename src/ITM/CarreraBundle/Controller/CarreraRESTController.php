<?php

namespace ITM\CarreraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use ITM\CarreraBundle\Entity\Carrera;

class CarreraRESTController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getCarrerasAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CarreraBundle:Carrera')->findAll();

        return array(
            'entities' => $entities,
        );
    }
}