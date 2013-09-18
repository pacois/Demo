<?php

namespace ITM\AlumnoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use ITM\AlumnoBundle\Entity\Alumno;

class AlumnoRESTController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getAlumnosAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AlumnoBundle:Alumno')->findAll();

        return array(
            'entities' => $entities,
        );
    }
}