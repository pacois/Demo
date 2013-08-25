<?php

namespace ITM\AlumnoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlumnoBundle:Default:index.html.twig', array('name' => $name));
    }
}
